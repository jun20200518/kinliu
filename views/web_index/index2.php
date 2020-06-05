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
    <link rel="shortcut icon" href="../images/icons/favicon.ico">
    <link href="css/vendor.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">
</head>

<body class="body sidebar--opened sidemenu--opened">
    <header class="mainheader">
        <div class="d-flex justify-content-center justify-content-lg-between align-items-center w_full h_full">
            <div class="mheader__ci d-none d-lg-flex align-items-center"><a class="d-block" href="./index.html"
                    title="3CK"><img src="../images/logos/logo-ci-header.svg" alt="3CK"></a></div>
            <div class="mainheader__pagetitle d-block d-lg-none">
                <div>交易首頁</div>
            </div>
            <div class="mainheader__right d-flex align-items-center justify-content-between">
                <div class="mheader__member d-none d-lg-flex align-items-center h_full">
                    <div class="mheader__member__name d-flex align-items-center">
                        <div class="pic"><img src="../images/icons/icon-member.svg" alt=""></div>
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
                            src="../images/icons/icon-close.svg" alt="X"></span><span
                        class="icon-sidemenu-trigger icon-sidemenu-trigger--open pointer"><img
                            src="../images/icons/icon-sidemenu-list.svg" alt="X"></span></div>
                <div class="btn-sidebar-trigger js__btn-sidebar-trigger btn-sidebar-trigger--open align-items-center">
                    <span class="icon-sidebar-trigger icon-sidebar-trigger--close pointer"><img
                            src="../images/icons/icon-close.svg" alt="X"></span><span
                        class="icon-sidebar-trigger icon-sidebar-trigger--open pointer"><img
                            src="../images/icons/icon-sidebar-list.svg" alt="X"></span></div>
            </div>
        </div>
    </header>
    <div class="page-wrap d-flex">
        <div class="sidemenu">
            <div class="side__member d-block d-lg-none mx-auto">
                <div class="side__member__name d-flex align-items-center justify-content-center">
                    <div class="pic mr-2"><img src="../images/icons/icon-member.svg" alt=""></div>
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
                        href="./index.html"><img class="mainnav__icon" src="../images/icons/icon-chart.svg" alt=""><img
                            class="mainnav__icon mainnav__icon--hover" src="../images/icons/icon-chart-hover.svg"
                            alt="">
                        <div class="text">商品首頁</div>
                    </a></div>
                <div class="mainnav__item"><a
                        class="mainnav__link d-flex align-items-center justify-content-center d-lg-block text-center"
                        href="./index.html"><img class="mainnav__icon" src="../images/icons/icon-customer-center.svg"
                            alt=""><img class="mainnav__icon mainnav__icon--hover"
                            src="../images/icons/icon-customer-center-hover.svg" alt="">
                        <div class="text">客服中心</div>
                    </a></div>
                <div class="mainnav__item"><a
                        class="mainnav__link d-flex align-items-center justify-content-center d-lg-block text-center"
                        href="./index.html"><img class="mainnav__icon" src="../images/icons/icon-user.svg" alt=""><img
                            class="mainnav__icon mainnav__icon--hover" src="../images/icons/icon-user-hover.svg" alt="">
                        <div class="text">個人中心</div>
                    </a></div>
            </nav>
        </div>
        <main class="main pagemain">
            <div class="container clearfix pt-5">
                <div class="game--wrap">
                    <div class="game">
                        <div class="board b1"></div>
                        <div class="board b2"></div>
                        <div class="ball elmt-bounceOut"></div>
                        <div class="info">
                            <h2 class="infoText">3</h2><button class="btn-start"
                                onClick="game.startGame()">START</button>
                        </div>
                        <div class="grade"></div>
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
                                    src="../images/icons/icon-clock.svg" alt=""><span
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
                                    src="../images/icons/icon-clock.svg" alt=""><span
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
    <script type="text/javascript" src="../js/vendor.js"></script>
    <script type="text/javascript" src="../js/product.js"></script>
</body>

</html>
