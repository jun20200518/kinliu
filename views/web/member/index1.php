<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="author" content="3CK">
    <meta name="keyword" content="3CK">
    <meta name="description" content="3CK">
    <title>会员中心</title>
    <link rel="shortcut icon" href="/images/icons/favicon.ico">
    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/member_center.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
            <div>会员中心</div>
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
<?php
if($error!=""){
    echo "<script>";
    echo "Swal.fire('".$error."');";
    echo "</script>";
}
?>
        <main class="main pagemain d-flex">
            <div class="page__container member__container d-flex flex-column justify-content-between">
                <div class="member__main__wrap">
                    <div class="member__center__top">
                        <div class="member__center__data d-block d-ssm-flex align-items-center justify-content-center">
                            <div class="member__name d-flex align-items-center justify-content-center">
                                <div class="pic mr-2"><img class="icon__user" src="/images/icons/icon-member.svg"
                                        alt=""></div>
                                <div class="name mt-1"><?php echo $userinfo->username;?></div>
                            </div>
                            <div
                                class="balance d-inline-flex d-ssm-flex flex-wrap justify-content-center align-items-center">
                                <div class="text">余额</div>
                                <div class="number"><?php echo $userinfo->usermoney;?></div>
                                <div class="text">元</div>
                            </div>
                            <div class="m__main__btns d-flex flex-wrap align-items-center justify-content-center"><a
                                    class="m__main__btn pointer" href="<?php  echo yii\helpers\Url::to(['web/member/deposit']) ?>"><img class="icon__member"
                                        src="/images/icons/icon-member-deposit.svg" alt="">
                                    <div class="text">帐户充值</div>
                                </a><a class="m__main__btn pointer" href="<?php  echo yii\helpers\Url::to(['web/member/withdraw']) ?>"><img
                                        class="icon__member" src="/images/icons/icon-member-withdraw.svg" alt="">
                                    <div class="text">帐户提现</div>
                                </a>
                                <a class="m__main__btn pointer" href=""><img
                                        class="icon__member" src="/images/icons/icon-member-promote.svg" alt="">
                                    <div class="text">我要推广</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="width: auto;height: 30px; text-align: center">
                        <img style="height: 50px; margin-top: -40px" src="/images/logos/member_logo.png">
                    </div>

                    <div class="member__pagelink__list d-block d-ssm-flex flex-wrap"><a
                            class="member__pagelink__item d-flex align-items-center justify-content-center"
                            href="<?php  echo yii\helpers\Url::to(['web/member/withdrawrecord']) ?>">
                            <div class="icon__member__wrap"><img class="icon__member"
                                    src="/images/icons/icon-member-withdraw02.svg" alt=""><img
                                    class="icon__member icon__member--hover"
                                    src="/images/icons/icon-member-withdraw02-hover.svg" alt=""></div>
                            <div class="text">提现记录</div>
                        </a><a class="member__pagelink__item d-flex align-items-center justify-content-center"
                            href="">
                            <div class="icon__member__wrap"><img class="icon__member"
                                    src="/images/icons/icon-member-workflow.svg" alt=""><img
                                    class="icon__member icon__member--hover"
                                    src="/images/icons/icon-member-workflow-hover.svg" alt=""></div>
                            <div class="text">充值流程教学</div>
                        </a>
                        <a class="member__pagelink__item d-flex align-items-center justify-content-center"
                            href="">
                            <div class="icon__member__wrap"><img class="icon__member"
                                    src="/images/icons/icon-member-rule.svg" alt=""><img
                                    class="icon__member icon__member--hover"
                                    src="/images/icons/icon-member-rule-hover.svg" alt=""></div>
                            <div class="text">交易规则</div>
                        </a>
                        <a class="member__pagelink__item d-flex align-items-center justify-content-center"
                            href="<?php  echo yii\helpers\Url::to(['web/member/pw']) ?>">
                            <div class="icon__member__wrap"><img class="icon__member"
                                    src="/images/icons/icon-member-modify.svg" alt=""><img
                                    class="icon__member icon__member--hover"
                                    src="/images/icons/icon-member-modify-hover.svg" alt=""></div>
                            <div class="text">修改密码</div>
                        </a><a class="member__pagelink__item d-flex align-items-center justify-content-center"
                            href="<?php  echo yii\helpers\Url::to(['web/member/fund']) ?>">
                            <div class="icon__member__wrap"><img class="icon__member"
                                    src="/images/icons/icon-member-fund.svg" alt=""><img
                                    class="icon__member icon__member--hover"
                                    src="/images/icons/icon-member-fund-hover.svg" alt=""></div>
                            <div class="text">资金流水</div>
                        </a></div>
                </div>
                <div class="member__fixed__bottom d-flex align-items-center justify-content-center"><a
                        class="button button__logout" href="<?php  echo yii\helpers\Url::to(['web/member/logout']) ?>"><img src="/images/icons/icon-logout.svg"
                            alt=""><span>安全退出</span></a></div>
            </div>
        </main>
    </div>
<?php include("sidebar.php"); ?>
    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="/js/member_center.js"></script>
</body>

</html>
