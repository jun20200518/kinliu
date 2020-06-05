
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
// $ptitle = $data->ptitle;
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="author" content="3CK">
    <meta name="keyword" content="3CK">
    <meta name="description" content="3CK">
    <title>帐户充值</title>
    <link href="css/vendor.css" rel="stylesheet">
    <link href="css/member_deposit.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
            <div>帐户充值</div>
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
            <div class="page__container member__container d-flex flex-column justify-content-between justify-content-lg-start member__with__sidebar">
                <div class="member__main__wrap member__main__wrap--with__sidemenu" id="app__deposit">
                    <div class="member__page__title d-none d-lg-flex align-items-center">
                        <div class="text">帐户充值</div><span class="title__line"></span></div>
                    <div class="deposit__wrap balance__sm__wrap d-flex align-items-center justify-content-center">
                        <div class="deposit__content">
                            <div class="deposit__account text-center mb-2"><span class="mr-2 mr-md-3 mr-lg-4"></span><span><?php echo $userinfo->username;?></span></div>
                            <div class="balance d-inline-flex d-ssm-flex flex-wrap justify-content-center align-items-center">
                                <div class="text">余额</div>
                                <div class="number"><?php echo $userinfo->usermoney;?></div>
                                <div class="text">元</div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="deposit__method__wrap deposit__section">
                        <div class="member__subtitle">充值方式</div>
                        <div class="deposit__method__list d-flex flex-wrap justify-content-start member__row">

                            <div class="deposit__method__item member__row__item pointer d-flex align-items-center justify-content-center" @click="selectMethod(3)" :class="method_select===3 ? ['selected']:[]"><img src="data:image/png;base64,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" alt="人工充值"></div>
                        </div>
                    </div> -->
                    <div class="deposit__number__wrap deposit__section">
                        <div class="member__subtitle">充值金额</div>
                        <div class="deposit__number__list d-flex flex-wrap justify-content-start member__row">

                            <?php
                                $reg_pusharr = explode("|",$reg_push);
                                for ($i=0;$i<count($reg_pusharr);$i++){
                                    echo " <div class=\"deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center\" id=\"".$reg_pusharr[$i]."\" @click=\"selectNumber('￥".$reg_pusharr[$i]."')\" :class=\"number_select==='￥".$reg_pusharr[$i]."' ? ['selected']:[]\"><span>￥".$reg_pusharr[$i]."</span></div>";
                                }
                            ?>
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="1000" @click="selectNumber('￥1000')" :class="number_select==='￥1000' ? ['selected']:[]"><span>￥1000</span></div>-->
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="2000" @click="selectNumber('￥2000')" :class="number_select==='￥2000' ? ['selected']:[]"><span>￥2000</span></div>-->
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="5000" @click="selectNumber('￥5000')" :class="number_select==='￥5000' ? ['selected']:[]"><span>￥5000</span></div>-->
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="10000" @click="selectNumber('￥10000')" :class="number_select==='￥10000' ? ['selected']:[]"><span>￥10000</span></div>-->
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="20000" @click="selectNumber('￥20000')" :class="number_select==='￥20000' ? ['selected']:[]"><span>￥20000</span></div>-->
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="30000" @click="selectNumber('￥30000')" :class="number_select==='￥30000' ? ['selected']:[]"><span>￥30000</span></div>-->
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="50000" @click="selectNumber('￥50000')" :class="number_select==='￥50000' ? ['selected']:[]"><span>￥50000</span></div>-->
<!--                            <div class="deposit__number__item member__row__item pointer d-flex align-items-center justify-content-center" id="100000" @click="selectNumber('￥100000')" :class="number_select==='￥100000' ? ['selected']:[]"><span>￥100000</span></div>-->
                        </div>
                    </div>





                  <div class="member__fixed__bottom member__fixed__bottom--mobile member__fixed__bottom--normal">
                      <div class="button__wrap d-flex align-items-center justify-content-center">
                          <!--                        -->
                          <div class="button button--base text-center" onclick="deposit()">前往支付</div>
                      </div>

                  </div>


                  <?php include("aside_wrap.php"); ?>
            </div>
        </main>
    </div>
<?php include("sidebar.php"); ?>
  <script type="text/javascript">

  </script>
    <script type="text/javascript" src="js/vendor.js"></script>
    <script type="text/javascript" src="js/member_deposit.js"></script>
<script>
    function deposit() {
        Swal.fire({
            position: 'center',
            icon: 'info',
            title: "请联系客服",
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>
</body>

</html>
