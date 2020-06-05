(function () {
    let data = {
        pid: '1',
        uid: '161', //window.uid
        order_status: '',
        order_sec: '',
        order_prc: '',
        now_price: '123567'
    };



    document
        .querySelectorAll('.transitionButtons a.btn')
        .forEach(dom => dom.addEventListener('click', e => {
            data["order_status"] = dom.dataset.buy;
            console.log(data["order_status"])
        }))
    document
        .querySelectorAll('.tradingModel__option a.btn')
        .forEach(dom => dom.addEventListener('click', e => {
            data["order_sec"] = dom.dataset.sec;
            console.log(e)
        }))
    document
        .querySelectorAll('.tradingModel__moneyOption_options a.btn')
        .forEach(dom => dom.addEventListener('click', e => {
            data["order_prc"] = e.target.text.substring(1);
            console.log(data["order_prc"])
        }))
    document
        .querySelectorAll('.tradingModel__moneyOption input')
        .forEach(dom => dom.addEventListener('keyup', e => {
            data["order_prc"] = e.target.value;
            console.log(data["order_prc"])
        }))


    document
        .querySelector('.tradingModel__confirm a.btn')
        .addEventListener('click', e => {
            e.preventDefault()

            axios({
                    method: 'get',
                    url: 'https://cors-anywhere.herokuapp.com/https://bitflyer.objkss.cc/index.php?r=web/webapi/add',
                    params: {
                        pid: '1',
                        uid: '161', //window.uid
                        order_status: data.order_status,
                        order_sec: data.order_sec,
                        order_prc: data.order_prc,
                        now_price: '123567'

                    }
                })
                .then(
                    res => {
                        console.log(res)
                        console.log("message", res.data.message)
                        if (res.data.type == 0) {
                            swal({
                                title: '自动关闭弹窗！',
                                text: '2秒后自动关闭。',
                                icon: 'success',
                                timer: 2000,
                                background:'#30373a'
                            }).then(
                                function () {},
                                // handling the promise rejection
                                function (dismiss) {
                                    if (dismiss === 'timer') {
                                        console.log('I was closed by the timer')
                                    }
                                }
                            )

                            console.log("type", res.data.message)


                        } else {
                            console.log("message", res.data.message)
                        }
                        receive_code = res.data.number

                    }
                )
        })

}());