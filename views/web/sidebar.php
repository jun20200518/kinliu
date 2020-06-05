<?php
$session = Yii::$app->session;
$uid = $session['id'];

?>

<div class="sidebar">
    <div class="sidebar__buttons d-flex align-items-center justify-content-center"><span class="button button--active" data-listname="transaction__current"><span>当前交易</span></span><span class="button" data-listname="transaction__records"><span>交易记录</span></span>
    </div>
    <div class="transaction__current transaction__list__wrap">
        <!-- todo: 無資料的狀況-->
        <!-- .no__transaction__item.align-items-center.justify-content-center.w_full.h_full.d-flex(data-toggle='modal', data-target='#modal__order__detal')-->
        <!--     div-->
        <!--         img(src="~images/icons/icon-list-pic.svg", alt="").no__record__pic-->
        <!--         .text-inactive 當前記錄為空-->
        <!-- todo: 有資料的狀況-->
        <div class="transaction1__list" id="transaction1__list">

        </div>
    </div>
    <div class="transaction__records transaction__list__wrap d-none">
        <div class="transaction2__list" id="transaction2__list">

    </div>
</div>
<div class="modal modal--dark fade" id="modal__order__detal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center">
        <div class="modal-content">
            <div class="modal-header modal__header__with__close d-flex align-items-center justify-content-center">
                <p class="modal__title">交易记录</p>
                <div class="btn__close__modal" data-dismiss="modal" aria-label="Close"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFHGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDE5LTEwLTE1VDAwOjU0OjQ3KzA4OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxOS0xMC0xNVQwMDo1NTozOSswODowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxOS0xMC0xNVQwMDo1NTozOSswODowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5OTE5YjA5YS0xZmRjLTUwNDktOTEyYy1lODNhOTlkOWI2MGQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTkxOWIwOWEtMWZkYy01MDQ5LTkxMmMtZTgzYTk5ZDliNjBkIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OTkxOWIwOWEtMWZkYy01MDQ5LTkxMmMtZTgzYTk5ZDliNjBkIj4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OTE5YjA5YS0xZmRjLTUwNDktOTEyYy1lODNhOTlkOWI2MGQiIHN0RXZ0OndoZW49IjIwMTktMTAtMTVUMDA6NTQ6NDcrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4DC/n0AAAAvElEQVQokXXQ0W0CMQyA4a8RA7AI4hZAaicoI7ABjAAb0AkqJqh47QsnmACJQQ51gPKAja7hailS4vx/Yvvl53va4B0f6AzHGEvsR3jFGnO8DUhjHNDgWrDFLhKHAIbgHbYlLlY4V1If3mMBoxC6KK0N4Bj5STy0yC9T6EunAOESuUdfxXP8/rN/ErLmSbx8if2fQZQKbqLmWawcxFcttD04a86eMvfJvekVphWckVLrPqlzicNmAK6lDdobnEg0fTWxPawAAAAASUVORK5CYII=" alt="x"></div>
            </div>
<!--            <div class="modal-body">-->
<!--                <div class="order__record__detail__wrap mt-3">-->
<!--                    <div class="order__record__detail__item d-flex align-items-center">-->
<!--                        <div class="title text-right em">商品</div>-->
<!--                        <div class="value text-light">欧元/英镑</div>-->
<!--                    </div>-->
<!--                    <div class="order__record__detail__item d-flex align-items-center">-->
<!--                        <div class="title text-right em">結算價</div>-->
<!--                        <div class="value text-light">0.88981</div>-->
<!--                    </div>-->
<!--                    <div class="order__record__detail__item d-flex align-items-center">-->
<!--                        <div class="title text-right em">成交價</div>-->
<!--                        <div class="value text-light">0.88976</div>-->
<!--                    </div>-->
<!--                    <div class="order__record__detail__item d-flex align-items-center">-->
<!--                        <div class="title text-right em">盈虧</div>-->
<!--                        <div class="value text-light">-100</div>-->
<!--                    </div>-->
<!--                    <div class="order__record__detail__item d-flex align-items-center">-->
<!--                        <div class="title text-right em">手續費</div>-->
<!--                        <div class="value text-light">5</div>-->
<!--                    </div>-->
<!--                    <div class="order__record__detail__item d-flex align-items-center">-->
<!--                        <div class="title text-right em">成交時間</div>-->
<!--                        <div class="value text-light">2019-09-16 17:08:01</div>-->
<!--                    </div>-->
<!--                    <div class="order__record__detail__item d-flex align-items-center">-->
<!--                        <div class="title text-right em">結算時間</div>-->
<!--                        <div class="value text-light">2019-09-16 17:09:31</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>


<script>
    setInterval("update()",1000);
    function update() {
        $.ajax({
            url: "index.php?r=web%2Fapi%2Findexorder",   //存取Json的網址
            type: "get",
            data: {uid: <?= $uid?>},
            dataType: 'json',
            success: function (data) {
                var ornow = data.ornow;
                var orall = data.orall;
                document.getElementById("transaction1__list").innerHTML = "";
                document.getElementById("transaction2__list").innerHTML = "";
                //console.log("user"+user.usermoney);
                if(ornow != null){
                    for (i = 0; i < ornow.length; i++) {
                        $("#transaction1__list").prepend(" <div class=\"transaction__item\" data-toggle=\"modal\" data-target=\"#modal__order__detal\">\n" +
                            "                        <div class=\"transaction__progress__bar\" data-total=\"180\"></div>\n" +
                            "                        <div class=\"detail d-flex align-items-center justify-content-between mb-3\">\n" +
                            "                        <div class=\"condition d-flex align-items-center\">\n" +
                            "                        <div class=\"name\">"+ornow[i].ptitle+"</div>\n" +
                            "                        <div class=\"conditon__setting text-rise\"><span class=\"pr-2\">"+ornow[i].ostyle+"</span><span>"+ornow[i].fee+"</span></div>\n" +
                            "                    </div>\n" +
                            "                    <div class=\"result text-win\">"+ornow[i].money+"</div>\n" +
                            "                        </div>\n" +
                            "                        <div class=\"transaction__more__detail\">\n" +
                            "                        <div class=\"d-flex align-items-center\">\n" +
                            "                        <div class=\"dealprice pr-1\">"+ornow[i].buyprice+" -</div>\n" +
                            "                        <div class=\"settlement text-rise\">"+now_price+"</div>\n" +
                            "                        </div>\n" +
                            "                        <div class=\"d-flex align-items-center justify-content-between\">\n" +
                            "                        <div class=\"bought__time\">"+ornow[i].endtimes+"</div>\n" +
                            "                    <div class=\"counter d-flex align-items-center\"><img class=\"icon__clock mr-1\" src=\"images/icons/icon-clock.svg\" alt=\"\"><span class=\"second pr-1\">"+ornow[i].endtime+"</span><span>秒</span></div>\n" +
                            "                    </div>\n" +
                            "                    </div>\n" +
                            "                    </div>");
                    }
                }
                if(orall != null){
                    for (i = 0; i < orall.length; i++) {
                        if(orall[i].is_win == "1"){
                            $("#transaction2__list").prepend("<div class=\"transaction__item\" data-toggle=\"modal\" data-target=\"#modal__order__detal\">\n" +
                                "                    <div class=\"detail d-flex align-items-center justify-content-between mb-3\">\n" +
                                "                        <div class=\"condition d-flex align-items-center\">\n" +
                                "                            <div class=\"name\">"+orall[i].ptitle+"</div>\n" +
                                "                            <div class=\"conditon__setting text-rise\"><span class=\"pr-2\">"+orall[i].ostyle+"</span><span>"+orall[i].fee+"</span></div>\n" +
                                "                        </div>\n" +
                                "                        <div class=\"result text-win\">"+orall[i].money+"</div>\n" +
                                "                    </div>\n" +
                                "                    <div class=\"transaction__more__detail\">\n" +
                                "                        <div class=\"d-flex align-items-center\">\n" +
                                "                            <div class=\"dealprice pr-1\">"+orall[i].buyprice+"-</div>\n" +
                                "                            <div class=\"settlement text-rise\">"+orall[i].sellprice+"</div>\n" +
                                "                        </div>\n" +
                                "                        <div class=\"d-flex align-items-center justify-content-between\">\n" +
                                "                            <div class=\"bought__time text-inactive\">"+orall[i].buytime+"</div>\n" +
                                "                            <div class=\"deal-time d-flex align-items-center\">"+orall[i].endtime+"</div>\n" +
                                "                        </div>\n" +
                                "                    </div>\n" +
                                "                </div>");
                        }else {
                            $("#transaction2__list").prepend("<div class=\"transaction__item\" data-toggle=\"modal\" data-target=\"#modal__order__detal\">\n" +
                                "                    <div class=\"detail d-flex align-items-center justify-content-between mb-3\">\n" +
                                "                        <div class=\"condition d-flex align-items-center\">\n" +
                                "                            <div class=\"name\">"+orall[i].ptitle+"</div>\n" +
                                "                            <div class=\"conditon__setting text-rise\"><span class=\"pr-2\">"+orall[i].ostyle+"</span><span>"+orall[i].fee+"</span></div>\n" +
                                "                        </div>\n" +
                                "                        <div class=\"result text-lose\">- "+orall[i].money+"</div>\n" +
                                "                    </div>\n" +
                                "                    <div class=\"transaction__more__detail\">\n" +
                                "                        <div class=\"d-flex align-items-center\">\n" +
                                "                            <div class=\"dealprice pr-1\">"+orall[i].buyprice+"-</div>\n" +
                                "                            <div class=\"settlement text-rise\">"+orall[i].sellprice+"</div>\n" +
                                "                        </div>\n" +
                                "                        <div class=\"d-flex align-items-center justify-content-between\">\n" +
                                "                            <div class=\"bought__time text-inactive\">"+orall[i].buytime+"</div>\n" +
                                "                            <div class=\"deal-time d-flex align-items-center\">"+orall[i].endtime+"</div>\n" +
                                "                        </div>\n" +
                                "                    </div>\n" +
                                "                </div>");
                        }

                    }
                }
            },
        });
    }

</script>
