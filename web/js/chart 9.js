(function () {
  const ws = new WebSocket("ws://18.138.6.54:9996");

  //creat chart
  let heightMinus = 0
  document.querySelectorAll('.mainNav, .priceSummary, .newsTicker, .controlButtons, .transitionButtons')
    .forEach(dom => heightMinus += dom.offsetHeight)
  width = document.querySelector('.chartWrapper').offsetWidth
  height = document.querySelector('body').offsetHeight - heightMinus - 30

  const chartCandleOptions = {
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
        color: 'rgba(21, 146, 230, 0.5)',
        style: 4,
      },
      vertLines: {
        color: 'rgba(21, 146, 230, 0.5)',
        style: 4,
      }
    },
    priceScale: {
      borderColor: 'rgba(207, 211, 232, 0.1)',
    },
    timeScale: {
      borderColor: 'rgba(207, 211, 232, 0.1)',
      timeVisible: true,
      secondsVisible: false
    },
    localization: {
      dateFormat: 'yyyy/MM/dd',
      priceFormatter: function (price) {
        price = parseFloat(price).toFixed(5)
        return price;
      }
    }
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

  let lastCurrentOrder = ''
  let currentOrderQty = ''
  let lastOrder = ''

  function getWS() {
    ws.onopen = function () {
      let chartType = data.currentSeries === "lineSeries" ? '1' : '2'
      ws.send(JSON.stringify({
        subscribe: 'kline',
        pid: data.currentMarket,
        timetype: data.activeInterval,
        type: chartType
      }));
      ws.send(JSON.stringify({
        subscribe: 'echo',
        id: '161'
      }));
      // console.log("已连接订阅");
    };

    ws.onclose = function () {
      // 关闭 websocket
      // console.log("连接已关闭...");
    };
  }
  //get data
  function getData() {
    return new Promise((resolve, reject) => {
      ws.onmessage = function (evt) {
        let json = JSON.parse(evt.data);
        if (json.type === 'now') {
          // console.log(json)
          updatePriceSummary(json)
          updateLastData(json)
          updateCurrentTransitionRecord(json)
          updateTransitionRecord(json)
          document.querySelector('.userCenterMenu__balance div').textContent = json.usermoney
          document.querySelector('.tradingModel__moneyOption__balance span').textContent = `余额：¥${json.usermoney}`
        }
        if (json.type === 'Kline') {
          document.querySelectorAll('.tradingModel__option_time').forEach((dom, i) => {
            dom.textContent = json.product.protime[i] + 's'
          })
          document.querySelectorAll('.tradingModel__option_odds').forEach((dom, i) => {
            dom.textContent = `收益${json.product.proscale[i]}%`
          })
          resolve(json)
        }
      };
    })
  }

  function renderSeries(data) {
    data.renderData[data.currentSeries] = data.stockData
    data.series = chart[data.seriesTypeMap[data.currentSeries]]()
    data.series.setData(data.renderData[data.currentSeries])
    data.series.applyOptions({
      priceLineWidth: 2,
      //lineSeries
      topColor: 'rgba(21, 146, 230, 0.8)',
      bottomColor: 'rgba(21, 146, 230, 0)',
      lineColor: 'rgba(21, 146, 230, 1)',
      //candleSeries
      upColor: '#ff001e',
      downColor: '#6fa22f',
      borderVisible: false,
      borderUpColor: '#ff001e',
      borderDownColor: '#6fa22f',
      wickUpColor: "#ff001e",
      wickDownColor: "#6fa22f",
    });
  }

  function updateData(data) {
    getLastTimeStamp()
    let timeInterval = data.intervalMap[data.activeInterval];
    let currentTimeStamp =
      Math.ceil(lastTimeStamp / timeInterval) * timeInterval; // 加一分鐘(60), 5mins(300), ....
    let lastBar = {}
    if (data.currentSeries === 'candleSeries') {
      lastBar.candleSeries = {
        time: currentTimeStamp,
        open: data.renderData.candleSeries[data.renderData.candleSeries.length - 1].open,
        high: data.renderData.candleSeries[data.renderData.candleSeries.length - 1].high,
        low: data.renderData.candleSeries[data.renderData.candleSeries.length - 1].low,
        close: data.renderData.candleSeries[data.renderData.candleSeries.length - 1].close
      }
    } else {
      lastBar.lineSeries = {
        time: currentTimeStamp,
        value: data.renderData.lineSeries[data.renderData.lineSeries.length - 1].value
      }
    }
    data.series.update(lastBar[data.currentSeries]);
    addPointTimer()
  }

  function addPointTimer() {
    clearTimeout(timer)
    timer = setTimeout(updateData, 64, data);
  };

  function getLastTimeStamp() {
    let currentSeries = data.renderData[data.currentSeries]
    let lastIndex = currentSeries.length - 1
    lastTimeStamp = data.renderData && currentSeries[lastIndex].time || null;
  }

  function changeChartData(ws, data) {
    let chartType = data.currentSeries === "lineSeries" ? '1' : '2'
    ws.send(JSON.stringify({
      subscribe: 'kline',
      pid: data.currentMarket,
      timetype: data.activeInterval,
      type: chartType
    }));
    return getData()
  }

  function updatePriceSummary(json) {
    let market = Object.keys(json.price)
    let priceSummary = document.querySelectorAll('.priceSummary__category')
    market.forEach(i => {
      let row = document.querySelector(`.tr[data-market='${i}']`)
      row.children[1].children[0].textContent = json.price[i].high
      row.children[2].children[0].textContent = json.price[i].low
      row.children[3].children[0].textContent = json.price[i].close
    })

    let currentMarket = document.querySelector('.priceSummary_now')
    currentMarket.textContent = json.price[data.currentMarket].ptitle

    priceSummary[0].querySelector('span').textContent = json.price[data.currentMarket].high
    priceSummary[1].querySelector('span').textContent = json.price[data.currentMarket].low
    priceSummary[2].querySelector('span').textContent = json.price[data.currentMarket].close

    document.querySelector('.tradingModel__market_name span').textContent = json.price[data.currentMarket].ptitle

    document.querySelector('.merchandise_price').textContent = json.price[data.currentMarket].close
  }

  function updateCurrentTransitionRecord(json) {
    if (!json.order_now.length) {
      let table = document.querySelector('#currenttransaction .tbody')
      table.innerHTML = ''
      currentOrderQty = ''
    } else if (json.order_now.length && lastCurrentOrder !== json.order_now[0].oid || currentOrderQty !== json.order_now.length) {
      let table = document.querySelector('#currenttransaction .tbody')
      let str = ''
      for (let i = 0; i < json.order_now.length; i++) {
        str += `
          <div class="tr">
            <div class="order">
              <span>(#${json.order_now[i].orderno})</span>
            </div>
            <div class="td_btc td ">
              <div class="td_flex">
                <span>${json.order_now[i].ptitle}</span>
              </div>
            </div>
            <div class="${json.order_now[i].ostyle === '0' ? 'td_btc_up' : 'td_btc_down'} td ">
              <div class="td_flex">
                <span>${json.order_now[i].ostyle === '0' ? '买涨' : '买跌'} </span>
                <span>${json.order_now[i].fee}</span>
              </div>
            </div>
            <div class="td">
              <span class="word-break">${json.order_now[i].buyprice}</span>
            </div>
            <div class="td">
              <span class="countdown">${json.order_now[i].sec}</span>
            </div>
            <div class="timer">
              <span>${json.order_now[i].buytime}</span>
            </div>
          </div>
        `
        lastCurrentOrder = json.order_now[0].oid
        currentOrderQty = json.order_now.length
        table.innerHTML = str
      }
    } else if (!json.order_now.length) {
      let table = document.querySelector('#currenttransaction .tbody')
      table.innerHTML = ''
    } else {
      for (let i = 0; i < json.order_now.length; i++) {
        document.querySelectorAll('#currenttransaction .tr .countdown')[i].textContent = `${json.order_now[i].sec}`
      }
    }
  }

  function updateTransitionRecord(json) {
    if (json.order_all.length && lastOrder !== json.order_all[0].oid) {
      let table = document.querySelector('#transactionrecord .tbody')
      let str = ''
      for (let i = 0; i < json.order_all.length; i++) {
        str += `
        <div class="expand">
          <div class="expand_btn">
            <a href="">
              <div class="tr">
                <div class="order">
                  <span>#${json.order_all[i].orderno} </span>
                </div>
                <div class="td_btc td ">
                  <div class="td_flex">
                    <span>${json.order_all[i].ptitle} </span>
                  </div>
                </div>
                <div class="${json.order_all[i].ostyle === '0' ? 'td_btc_up' : 'td_btc_down'} td ">
                  <div class="td_flex td_buy">
                    <span>${json.order_all[i].ostyle === '0' ? '买涨' : '买跌'} </span>
                    <span>${json.order_all[i].fee}</span>
                  </div>
                </div>
                <div class="td ${json.order_all[i].is_win === '1' ? 'td_price_Up' : 'td_price_Down'}">
                  <span>${json.order_all[i].is_win === '1' ? json.order_all[i].ploss : -json.order_all[i].fee}</span>
                </div>
                <div class="td">
                  <img src="img/arrow.svg" />
                </div>
                <div class="timer">
                  <span>${json.order_all[i].buytime}</span>
                </div>
              </div>
            </a>
          </div>
          <div id="acc1" class="expand_content" style="height: 0px;">
            <div class="content_tr">
              <span class="word-break">${json.order_all[i].buyprice}</span>
              <span>-</span>
              <span class="change_down word-break">${json.order_all[i].sellprice}</span>
              <span><img src=${json.order_all[i].is_win === '1' ? "img/arrow_up.svg" : "img/arrow_down.svg"}></span>
            </div>
            <div class="content_tr_bet">
              <span>投注秒数：</span>
              <span>${json.order_all[i].endprofit}s</span>
              <span></span>
              <span>赔率：</span>
              <span>${json.order_all[i].endloss}%</span>
            </div>
          </div>
        </div>        
        `
        lastOrder = json.order_all[0].oid
        table.innerHTML = str
      }
    }
  }

  function updateLastData(json) {
    if (data.currentSeries === 'lineSeries') {
      data.renderData.lineSeries.push({
        time: Math.ceil(json.price[data.currentMarket].time),
        value: json.price[data.currentMarket].close
      })
    } else {
      data.renderData.candleSeries.push({
        time: Math.ceil(json.price[data.currentMarket].time),
        open: parseFloat(json.price[data.currentMarket].open),
        high: parseFloat(json.price[data.currentMarket].high),
        low: parseFloat(json.price[data.currentMarket].low),
        close: parseFloat(json.price[data.currentMarket].close),
      })
    }
  }

  function sendOrder() {
    let orderData = {
      pid: '',
      uid: window.uid, //window.uid
      order_status: '',
      order_sec: '',
      order_prc: '',
      now_price: ''
    };

    var sec = false;
    var money = false;
    var moneykey = "";
    var expectedprofit = "";

    function check() {
      var btn = $(".tradingModel__confirm a.btn");
      if (sec == true && money == true) {
        btn.attr("disabled", false);
        btn.removeClass("disabled");
        let expectedmoney = expectedprofit * orderData["order_prc"] / 100 + (orderData["order_prc"] * 1)
        document.querySelector('.tradingModel__confirm__expectation span').textContent = `预期收益：¥${expectedmoney}`;
      } else {
        btn.addClass("disabled");
        btn.attr("disabled", true);
        document.querySelector('.tradingModel__confirm__expectation span').textContent = `预期收益：¥0.00`
      }
    }

    document
      .querySelectorAll('.transitionButtons a.btn')
      .forEach(dom => dom.addEventListener('click', e => {
        orderData["order_status"] = dom.dataset.buy;
      }))
    document
      .querySelectorAll('.tradingModel__option a.btn')
      .forEach(dom => dom.addEventListener('click', e => {
        expectedprofit = e.currentTarget.querySelector('.tradingModel__option_odds').textContent.slice(2, -1);
        sec = true;
        check()
        orderData["order_sec"] = dom.dataset.sec;
      }))
    document
      .querySelectorAll('.tradingModel__moneyOption_options a.btn')
      .forEach(dom => dom.addEventListener('click', e => {
        money = true;
        orderData["order_prc"] = e.target.text.substring(1);
        check();
      }))
    document
      .querySelectorAll('.tradingModel__moneyOption input')
      .forEach(dom => dom.addEventListener('keyup', e => {
        if (e.target.value != "" && e.target.value != "0") {
          if (parseInt(e.target.value) >= 100) {
            moneykey = e.target.value;
            money = true;
            orderData["order_prc"] = e.target.value;
          } else {
            money = false;
          }
        } else {
          moneykey = "";
          money = false;
        }
        check();
      }))
    document
      .querySelectorAll('.tradingModel__moneyOption input')
      .forEach(dom => dom.addEventListener('click', e => {
        if (moneykey == "") {
          money = false;
        }
        check();
      }))


    document
      .querySelector('.tradingModel__confirm a.btn')
      .addEventListener('click', e => {
        e.preventDefault()
        orderData.pid = data.currentMarket
        if (data.currentSeries === 'lineSeries') {
          orderData.now_price = data.renderData.lineSeries[data.renderData.lineSeries.length - 1].value
        } else {
          orderData.now_price = data.renderData.candleSeries[data.renderData.candleSeries.length - 1].close
        }

        axios({
          method: 'get',
          url: 'https://bitflyer.objkss.cc/index.php?r=web/webapi/add',
          params: {
            ...orderData
          }
        }).then(res => {
          if (res.data.type == 0) {
            swal({
              title: '投注成功',
              icon: 'success',
              timer: 2000
            })
          } else {
            swal({

              title: res.data.message,
              icon: 'warning',
              timer: 2000
            })
          }
          receive_code = res.data.number
        })
      })
  }
  //init chart
  getWS()
  getData().then(d => {
    // console.log(d)
    data.stockData = d.min
    data.renderData[data.currentSeries] = data.stockData
    getLastTimeStamp()
    renderSeries(data)
    updateData(data)
  })
  sendOrder()

  //handle resize
  window.addEventListener('resize', () => {
    width = document.querySelector('.chartWrapper').offsetWidth
    height = document.querySelector('body').offsetHeight - heightMinus - 30
    chart.resize(height, width);
  })

  //chart change
  document.querySelector('.controlButtons_chartChangePanel').addEventListener('click', e => {
    document.querySelectorAll('.chartChanger').forEach(dom => dom.classList.remove('active'))
    e.target.closest('.chartChanger').classList.add('active')

    chart.removeSeries(data.series)
    data.currentSeries = e.target.closest('.chartChanger').dataset.chartseries
    changeChartData(ws, data).then(d => {
      data.stockData = d.min
      data.renderData[data.currentSeries] = data.stockData

      renderSeries(data)
      getLastTimeStamp()
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
    changeChartData(ws, data).then(res => {
      data.stockData = res.min
      chart.removeSeries(data.series)
      getLastTimeStamp()
      renderSeries(data)
      updateData(data)
    })
  })

  //market change
  document.querySelector('.market_content .tbody').addEventListener('click', (e) => {
    if (!e.target.closest('.tr')) return
    if (!data.isLoading) {
      data.isLoading = true
      let market = e.target.closest('.tr').dataset.market
      data.currentMarket = market

      changeChartData(ws, data).then(res => {
        data.stockData = res.min
        chart.removeSeries(data.series)
        getLastTimeStamp()
        renderSeries(data)
        updateData(data)

        document.querySelector('.market_wrapper').classList.remove('bounceInDown')
        document.querySelector('.market_wrapper').classList.add('bounceOutUp')
        document.querySelector('.marketModel').classList.remove('show');
      })
    }
  })
  document.querySelector('.market_wrapper').addEventListener('animationend', (e) => {
    if (e.animationName === 'bounceOutUp') data.isLoading = false
  })
})();