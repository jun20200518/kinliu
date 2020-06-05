<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="author" content="3CK">
    <meta name="keyword" content="3CK">
    <meta name="description" content="3CK">
    <title>3CK</title>
    <link rel="shortcut icon" href="/images/icons/favicon.ico" />
    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/layout_index.css" rel="stylesheet">

</head>

<body class="body sidebar--opened sidemenu--opened">
    <header class="mainheader">
        <div class="d-flex justify-content-center justify-content-lg-between align-items-center w_full h_full">
            <div class="mheader__ci d-none d-lg-flex align-items-center"><a class="d-block" href="./index.html"
                    title="3CK"><img src="/images/logos/logo-ci-header.svg" alt="3CK"></a></div>
            <div class="mainheader__pagetitle d-block d-lg-none">
                <div class="white">交易首頁</div>
            </div>
            <div class="mainheader__right d-flex align-items-center justify-content-between">
                <div class="mheader__member d-none d-lg-flex align-items-center h_full">
                    <div class="mheader__member__name d-flex align-items-center">
                        <div class="pic"><img src="/images/icons/icon-member.svg" alt=""></div>
                        <div class="name">測試機器人</div>
                    </div>
                    <div class="balance d-flex align-items-center">
                        <div class="text">餘額</div>
                        <div class="number">129855.50</div>
                        <div class="text">元</div>
                    </div>
                    <div class="btn__deposit pointer"><span class="icon__deposit fas fa-plus"></span><span>儲值</span>
                    </div>
                </div>
                <div class="btn-sidemenu-trigger js__btn-sidemenu-trigger d-flex d-lg-none align-items-center"><span
                        class="icon-sidemenu-trigger icon-sidemenu-trigger--close pointer"><img
                            src="/images/icons/icon-close.svg" alt="X"></span><span
                        class="icon-sidemenu-trigger icon-sidemenu-trigger--open pointer"><img
                            src="/images/icons/icon-sidemenu-list.svg" alt="X"></span></div>
                <div class="btn-sidebar-trigger js__btn-sidebar-trigger btn-sidebar-trigger--open align-items-center">
                    <span class="icon-sidebar-trigger icon-sidebar-trigger--close pointer"><img
                            src="/images/icons/icon-close.svg" alt="X"></span><span
                        class="icon-sidebar-trigger icon-sidebar-trigger--open pointer"><img
                            src="/images/icons/icon-sidebar-list.svg" alt="X"></span></div>
            </div>
        </div>
    </header>
    <div class="page-wrap d-flex">
        <div class="sidemenu">
            <div class="side__member d-block d-lg-none mx-auto">
                <div class="side__member__name d-flex align-items-center justify-content-center">
                    <div class="pic mr-2"><img src="/images/icons/icon-member.svg" alt=""></div>
                    <div class="name mt-1">測試機器人</div>
                </div>
                <div class="balance d-flex flex-wrap justify-content-center align-items-center">
                    <div class="text">餘額</div>
                    <div class="number">129855.50</div>
                    <div class="text">元</div>
                </div>
                <div class="btn__deposit pointer"><span class="icon__deposit fas fa-plus"></span><span>儲值</span></div>
            </div>
            <nav class="mainnav">
                <div class="mainnav__item mainnav__item"><a
                        class="mainnav__link mainnav__link--current d-flex align-items-center justify-content-center d-lg-block text-center"
                        href="./index.html"><img class="mainnav__icon" src="/images/icons/icon-chart.svg" alt=""><img
                            class="mainnav__icon mainnav__icon--hover" src="/images/icons/icon-chart-hover.svg"
                            alt="">
                        <div class="text">商品首頁</div>
                    </a></div>
                <div class="mainnav__item"><a
                        class="mainnav__link d-flex align-items-center justify-content-center d-lg-block text-center"
                        href="./index.html"><img class="mainnav__icon" src="/images/icons/icon-customer-center.svg"
                            alt=""><img class="mainnav__icon mainnav__icon--hover"
                            src="/images/icons/icon-customer-center-hover.svg" alt="">
                        <div class="text">客服中心</div>
                    </a></div>
                <div class="mainnav__item"><a
                        class="mainnav__link d-flex align-items-center justify-content-center d-lg-block text-center"
                        href="./index.html"><img class="mainnav__icon" src="/images/icons/icon-user.svg" alt=""><img
                            class="mainnav__icon mainnav__icon--hover" src="/images/icons/icon-user-hover.svg" alt="">
                        <div class="text">個人中心</div>
                    </a></div>
            </nav>
        </div>
        <main class="main pagemain">
            <div class="homepage__container page__container">
                <div class="homepage__upperzone">
                    <div class="clearfix">
                        <div class="js-marquee marquee float-lg-right">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit END.</div>
                        <div class="commodity__bar d-flex flex-wrap align-items-center">
                            <div class="cselect__wrap">
                                <div class="cselect__trigger d-flex align-items-center justify-content-between">
                                    <div class="commodity__name commodity--active text-blue"><?phpecho $info->Name;?></div>
                                    <div class="commodity__price--current d-flex align-items-center">
                                        <div class="text pr-2">現價</div>
                                        <div class="price"><?phpecho $info->Price;?></div>
                                    </div>
                                    <div class="icon__cselect__trigger"><img
                                            src="/images/icons/download.png"
                                            alt="v"></div>
                                </div>
                                <div class="cselect__dropdown"></div>
                            </div>
                            <div
                                class="commodity__pricelist d-flex align-items-center justify-content-between justify-content-ssm-start">
                                <div class="commodity__pricelist__item">
                                    <div class="title">開盤</div>
                                    <div class="number"><?phpecho $info->Open;?></div>
                                </div>
                                <div class="commodity__pricelist__item">
                                    <div class="title">最高</div>
                                    <div class="number"><?phpecho $info->High ;?></div>
                                </div>
                                <div class="commodity__pricelist__item">
                                    <div class="title">最低</div>
                                    <div class="number green"><?phpecho $info->Low;?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart__container">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="chart-control-wrap d-flex align-items-center justify-content-between justify-content-xs-start"
                            id="js-chart-control-wrap">
                            <div class="btn-chart-control-wrap d-flex align-items-center">
                                <div class="btn-chart-control btn-chart-control--current"><img
                                        class="icon-chart-control" src="/images/icons/icon-line-chart.svg" alt=""><img
                                        class="icon-chart-control icon-chart-control--active"
                                        src="/images/icons/icon-line-chart-active.svg" alt="走勢圖"></div>
                                <div class="btn-chart-control"><img class="icon-chart-control"
                                        src="/images/icons/icon-candle-chart.svg" alt=""><img
                                        class="icon-chart-control icon-chart-control--active"
                                        src="/images/icons/icon-candle-chart-active.svg" alt="k線圖"></div>
                            </div>
                            <div class="btn-chart-range-wrap" id="js-btn-chart-range-wrap"></div>
                        </div>
                        <div class="buybtns__wrap d-flex align-items-center">
                            <div class="buybtn buybtn__rise pointer d-flex align-items-center justify-content-center">
                                <span class="icon__buybtn"><img class="icon__arrow__up"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAMCAYAAACulacQAAAAAXNSR0IArs4c6QAAAGdJREFUGBljYICC////GwDxeRgfhQZKXABiEGhAl2gACm4AYpCCD0BsAFYAYkAFBID0ASAOAOILMMkLIAEQByQJpTcA2Q0ggQKQAAggSYJMAWuAyCBJwgSYYAxsNI0kUawCulAAWQAAITVfpmhKZLQAAAAASUVORK5CYII="
                                        alt="up"></span><span>買漲</span></div>
                            <div class="buybtn buybtn__down pointer d-flex align-items-center justify-content-center">
                                <span class="icon__buybtn"><img class="icon__arrow__down"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAMCAYAAACulacQAAAAAXNSR0IArs4c6QAAAHdJREFUGBmVjlERgCAQRMExABGIYAQjEIkoRiCCEYhiA3yHnnPil8zssMvbu8E5c1prm4lusgEfbR6hZZ/JH5BPrK/6HXhfZnyRgve+aomc8dFhEuqAe0cLOlDoZYxMZySwoqRbZDogacspD1DDY0JSuNYp0HsEJ+tsVYm+toFVAAAAAElFTkSuQmCC"
                                        alt="down"></span><span>買跌</span></div>
                        </div>
                    </div>
                    <div class="chart__wrap">
                        <div id="chartDiv"></div>
                    </div>
                    <div class="chart__indicator__wrap w_full">
                        <div id="chart__indicator"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="sidebar">
        <div class="sidebar__buttons d-flex align-items-center justify-content-center"><span
                class="button button--active" data-listname="transaction__current"><span>當前交易</span></span><span
                class="button" data-listname="transaction__records"><span>交易記錄</span></span></div>
        <div class="transaction__current transaction__list__wrap">
            <!-- todo: 無資料的狀況-->
            <!-- todo: 有資料的狀況-->
            <div class="transaction__list">
                <div class="transaction__item">
                    <div class="transaction__progress__bar" data-total="180"></div>
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>5000</span></div>
                        </div>
                        <div class="result text-rise">300</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-rise">11989.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time">2019-09-16 15:14:01</div>
                            <div class="counter d-flex align-items-center"><img class="icon__clock mr-1"
                                    src="/images/icons/icon-clock.svg" alt=""><span
                                    class="second pr-1">180</span><span>秒</span></div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="transaction__progress__bar" data-total="30"></div>
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time">2019-09-16 15:13:21</div>
                            <div class="counter d-flex align-items-center"><img class="icon__clock mr-1"
                                    src="/images/icons/icon-clock.svg" alt=""><span
                                    class="second pr-1">30</span><span>秒</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="transaction__records transaction__list__wrap d-none">
            <div class="transaction__list">
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>3000</span></div>
                        </div>
                        <div class="result text-rise">300</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-rise">11989.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:14:01</div>
                            <div class="deal-time d-flex align-items-center">2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
                <div class="transaction__item">
                    <div class="detail d-flex align-items-center justify-content-between mb-3">
                        <div class="condition d-flex align-items-center">
                            <div class="name">比特币</div>
                            <div class="conditon__setting text-rise"><span class="pr-2">買漲</span><span>1000</span></div>
                        </div>
                        <div class="result text-down">-200</div>
                    </div>
                    <div class="transaction__more__detail">
                        <div class="d-flex align-items-center">
                            <div class="dealprice pr-1">11689.31 -</div>
                            <div class="settlement text-down">11489.31</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bought__time text-inactive">2019-09-16 15:13:21</div>
                            <div class="deal-time d-flex align-items-center"> 2019-09-16 15:14:01</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pace pace--active d-flex align-items-center justify-content-center">
        <div class="pace__logo">
            <div class="pace__logo__top"><img src="/images/logos/logo-loading-top.png" alt=""></div>
            <div class="pace-progress"></div>
            <div class="pace__logo__down"><img src="/images/logos/logo-loading-down.png" alt=""></div>
        </div>
    </div>
    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="/js/layout_index.js"></script>
</body>

</html>
