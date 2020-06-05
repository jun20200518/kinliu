<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="author" content="3CK">
    <meta name="keyword" content="3CK">
    <meta name="description" content="3CK">
    <title>我要推广</title>
    <link rel="shortcut icon" href="/images/icons/favicon.ico">
    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/member_promote.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<?php

set_include_path("/data/htdocs/testbibox/views/web");

?>
<body class="body sidebar--opened sidemenu--opened">
<header class="mainheader">
    <div class="d-flex justify-content-center justify-content-lg-between align-items-center w_full h_full">
        <div class="mheader__ci d-none d-lg-flex align-items-center"><a class="d-block" href="<?php  echo yii\helpers\Url::to(['web/index/index']) ?>"
                                                                        title="3CK"><img src="/images/logos/logo-ci-header.svg" alt="3CK"></a></div>
        <div class="mainheader__pagetitle d-block d-lg-none">
            <div>我要推广</div>
        </div>
        <div class="mainheader__right d-flex align-items-center justify-content-between">
            <div class="mheader__member d-none d-lg-flex align-items-center h_full">
                <div class="mheader__member__name d-flex align-items-center">
                    <div class="pic"><img src="/images/icons/icon-member.svg" alt=""></div>
                    <div class="name" ><?php echo $userinfo->username;?></div>
                </div>
                <div class="balance d-flex align-items-center">
                    <div class="text">余额</div>
                    <div class="number" id="user_money2"><?php echo $userinfo->usermoney;?></div>
                    <div class="text">元</div>
                </div><a class="btn__deposit pointer" href="<?php  echo yii\helpers\Url::to(['web/member/deposit']) ?>"><span
                            class="icon__deposit fas fa-plus"></span><span>充值</span></a>
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


          <?php include("menu.php"); ?>
        <main class="main pagemain d-flex">
            <div
                class="page__container member__container d-flex flex-column justify-content-between justify-content-lg-start member__with__sidebar">
                <div class="member__main__wrap member__main__wrap--with__sidemenu h_full">
                    <div class="member__page__title d-none d-lg-flex align-items-center">
                        <div class="text">我要推广</div><span class="title__line"></span>
                    </div>
                    <div class="promote__content d-flex flex-column align-items-center justify-content-center">
                        <p class="text">我的推荐码</p>
                        <div class="promote__number d-flex align-items-center justify-content-center"><span><?= $id;?></span>
                        </div>
                    </div>
                </div>
              <?php include("aside_wrap.php"); ?>
            </div>
        </main>
    </div>
    <?php include("sidebar.php"); ?>
    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="/js/member_promote.js"></script>
</body>

</html>
