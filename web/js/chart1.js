(function () {
    const cors = 'https://cors-anywhere.herokuapp.com/';
    const timePeriodMap = {
        'M': 'min',
        'H': 'hour',
        'D': 'day'
    }
    let url = `http://api.bitkk.com/data/v1/kline?market=etc_usdt&type=5min&size=100`
    const ws = new WebSocket("ws://websocket.objkss.cc:9997");

    //creat chart
    let heightMinus = 0
    document.querySelectorAll('.mainNav, .priceSummary, .newsTicker, .controlButtons, .transitionButtons')
        .forEach(dom => heightMinus += dom.offsetHeight)
    width = document.querySelector('.chartWrapper').offsetWidth
    height = document.querySelector('body').offsetHeight - heightMinus - 30

    let chartCandleOptions = {
        width: width,
        height: height,
        topColor: 'rgba(255, 0, 0, 0.4)',
        bottomColor: 'rgba(255, 0, 0, 0)',
        layout: {
            backgroundColor: '#13181A',
            textColor: '#707071',
        },
        grid: {
            horzLines: {
                color: '#253a68',
            },
            vertLines: {
                color: '#253a68'
            }
        },
        priceScale: {
            borderColor: 'rgba(207, 211, 232, 0.1)'
        },
        timeScale: {
            borderColor: 'rgba(207, 211, 232, 0.1)',
            timeVisible: true,
            secondsVisible: true
        },
    };
    let chart = LightweightCharts.createChart(
        document.getElementById('chartView'),
        chartCandleOptions
    );

    let data = {
        stockData: {},
        renderData: {
            lineSeries: [],
            candleSeries: [],
        },
        intervalMap: {
            '1M': 60,
            '5M': 300,
            '15M': 900,
            '30M': 1800,
            '1H': 3600,
            '1D': 86400,
        },
        activeInterval: '1M',
        currentSeries: 'lineSeries',
        seriesTypeMap: {
            candleSeries: 'addCandlestickSeries',
            lineSeries: 'addAreaSeries'
        },
        series: null,
        currentMarket: '1',
        isLoading: false
    }

    let lastTimeStamp = ''
    let timer = null

    function getData() {
        return fetch(`${cors}${url}`).then(res => {
            return res.json()
        })
    }

    //get data
    function getWS() {
        return new Promise((resolve, reject) => {
            var now_price = "";
            var now_time = "";
            var KlineData = null;
            ws.onopen = function () {
                ws.send(JSON.stringify({
                    subscribe: 'kline',
                    pid: data.currentMarket,
                    timetype: '1M',
                    type: '1',
                }));
                ws.send(JSON.stringify({
                    subscribe: 'echo',
                    id: '<?=$uid?>'
                }));
                console.log("已连接订阅9997");
            };

            ws.onmessage = function (evt) {
                var json = JSON.parse(evt.data);

                // if (json.type == "Kline") {
                //   console.log(json);
                //   var min = json.min;
                //   KlineData = min[0];
                // } else {
                //   now_price = json.buy;
                //   now_time = json.buy;
                //   console.log(json);
                // }
                if (json.price) {
                    // console.log(json.price)
                    updateCurrent(json)

                    // console.log("產品值：" + data.currentMarket);
                    data.renderData.lineSeries.push({
                        time: Math.ceil(json.price[data.currentMarket].date),
                        value: json.price[data.currentMarket].buy
                    })
                    // console.log(data.renderData.lineSeries[data.renderData.lineSeries.length - 1])
                }
                resolve(json)
            };

            ws.onclose = function () {
                // 关闭 websocket
                console.log("连接已关闭...");
            };
        })
    }

    function renderSeries(data) {
        data.renderData[data.currentSeries] = data.stockData
        data.series = chart[data.seriesTypeMap[data.currentSeries]]()
        data.series.setData(data.renderData[data.currentSeries])
        data.series.applyOptions({
            priceLineWidth: 2,
            topColor: 'rgba(21, 146, 230, 0.8)',
            bottomColor: 'rgba(21, 146, 230, 0)',
            lineColor: 'rgba(21, 146, 230, 1)',
        });
    }

    function updateData(data) {
        // 新增一個point的『time』, 代入上一個time stamp，加一秒(每秒跳動)
        // 在1分、5分、15分… 時代入值，畫出一根蠟燭
        // let d = new Date(data.renderData[data.currentSeries.length - 1]);
        // lastTimeStamp = d.valueOf(); // 加一秒
        getLastTimeStamp()
        let timeInterval = data.intervalMap[data.activeInterval];
        let currentTimeStamp =
            Math.ceil(lastTimeStamp / timeInterval) * timeInterval; // 加一分鐘(60), 5mins(300), ....
        // console.log(currentTimeStamp)
        let lastBar = {
            candleSeries: {
                time: currentTimeStamp,
                open: 5,
                high: 6,
                low: 5.5,
                close: 5.8
            },
            lineSeries: {
                time: currentTimeStamp,
                value: data.renderData.lineSeries[data.renderData.lineSeries.length - 1].value
            }
        }
        data.series.update(lastBar[data.currentSeries]);
        addPointTimer()
    }

    function addPointTimer() {
        clearTimeout(timer)
        timer = setTimeout(updateData, 16, data);
    };

    function getLastTimeStamp() {
        let currentSeries = data.renderData[data.currentSeries]
        let lastIndex = currentSeries.length - 1
        // console.log(currentSeries)

        lastTimeStamp = data.renderData && currentSeries[lastIndex].time || null;
    }

    function changeMarket(ws, data) {
        return new Promise((resolve, reject) => {
            ws.send(JSON.stringify({
                subscribe: 'kline',
                pid: data.currentMarket,
                timetype: data.activeInterval
            }));
            ws.onmessage = function (evt) {
                var json = JSON.parse(evt.data);
                if (json.price) {
                    updateCurrent(json)
                    data.renderData.lineSeries.push({
                        time: Math.ceil(json.price[data.currentMarket].date),
                        value: json.price[data.currentMarket].buy
                    })
                    // console.log(data.renderData.lineSeries[data.renderData.lineSeries.length - 1])
                }
                resolve(json)
            };
        })
    }

    function updateCurrent(json) {
        console.log("Json",json);
        let market = Object.keys(json.price)
        let priceSummary = document.querySelectorAll('.priceSummary__category')
        market.forEach(i => {
            let row = document.querySelector(`.tr[data-market='${i}'`)

            row.children[1].children[0].textContent = parseFloat(json.price[i].high).toFixed(3)
            row.children[2].children[0].textContent = parseFloat(json.price[i].low).toFixed(3)
            row.children[3].children[0].textContent = parseFloat(json.price[i].buy).toFixed(3)
        })
        priceSummary[0].querySelector('span').textContent = parseFloat(json.price[data.currentMarket].high).toFixed(3)
        priceSummary[1].querySelector('span').textContent = parseFloat(json.price[data.currentMarket].low).toFixed(3)
        priceSummary[2].querySelector('span').textContent = parseFloat(json.price[data.currentMarket].buy).toFixed(3)
    }

    //init chart
    getWS().then(d => {
        data.stockData = d.min
        data.renderData.lineSeries = data.stockData

        getLastTimeStamp()
        renderSeries(data)
        updateData(data)

        console.log(data)
    })

    //handle resize
    window.addEventListener('resize', () => {
        document.querySelector('.tv-lightweight-charts').remove()
        width = document.querySelector('.chartWrapper').offsetWidth
        height = document.querySelector('body').offsetHeight - heightMinus - 30
        chartCandleOptions.width = width
        chartCandleOptions.height = height
        chart = LightweightCharts.createChart(
            document.getElementById('chartView'),
            chartCandleOptions
        );
        getLastTimeStamp()
        renderSeries(data)
        updateData(data)
    })

    //chart change
    document.querySelector('.controlButtons_chartChangePanel').addEventListener('click', e => {
        document.querySelectorAll('.chartChanger').forEach(dom => dom.classList.remove('active'))
        e.target.closest('.chartChanger').classList.add('active')

        chart.removeSeries(data.series)
        data.currentSeries = e.target.closest('.chartChanger').dataset.chartseries
        getWS().then(d => {
            data.renderData[data.currentSeries] = d.min
            getLastTimeStamp()
            renderSeries(data)
            updateData(data)
        })
    })

    //period change
    document.querySelector('.dropdown-toggle').addEventListener('click', () => {
        menu = document.querySelector('.dropdown-menu')
        menu.style.display = menu.style.display === 'none' ? 'block' : "none"
    })

    document.querySelector('.dropdown-menu').addEventListener('click', (e) => {
        document.querySelector('.dropdown-toggle span').textContent = e.target.textContent
        data.activeInterval = e.target.textContent
        document.querySelector('.dropdown-menu').style.display = 'none'
        changeMarket(ws, data).then(res => {
            data.stockData = res.min
            chart.removeSeries(data.series)
            getLastTimeStamp()
            renderSeries(data)
            updateData(data)
        })
    })

    //market change

    document.querySelector('.market_content .tbody').addEventListener('click', (e) => {
        if (!data.isLoading) {
            data.isLoading = true
            let market = e.target.closest('.tr').dataset.market
            data.currentMarket = market
            changeMarket(ws, data).then(res => {
                data.stockData = res.min
                console.log(data)
                chart.removeSeries(data.series)
                getLastTimeStamp()
                renderSeries(data)
                updateData(data)


                let currentMarket = document.querySelector('.priceSummary_now')
                currentMarket.textContent = e.target.closest('.tr').querySelector('.td_flex span').textContent

                document.querySelector('.market_wrapper').classList.remove('bounceInDown')
                document.querySelector('.market_wrapper').classList.add('bounceOutUp')
                document.querySelector('.marketModel').classList.remove('show');
                console.log(data)
            })
        }
    })
    document.querySelector('.market_wrapper').addEventListener('animationend', (e) => {
        if (e.animationName === 'bounceOutUp') data.isLoading = false
    })
})();

