
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
    <title>帐户提现</title>
    <link rel="shortcut icon" href="/images/icons/favicon.ico">
    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/member_withdraw.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>
<?php

set_include_path("/data/htdocs/testbibox/views/web");

?>
<body class="body sidebar--opened sidemenu--opened">
  <?php
    if($error!=""){
      echo "<script>";
      echo "Swal.fire('".$error."');";
      echo "</script>";
    }
  ?>
  <header class="mainheader">
      <div class="d-flex justify-content-center justify-content-lg-between align-items-center w_full h_full">
          <div class="mheader__ci d-none d-lg-flex align-items-center"><a class="d-block" href="<?php  echo yii\helpers\Url::to(['web/index/index']) ?>"
                                                                          title="3CK"><img src="/images/logos/logo-ci-header.svg" alt="3CK"></a></div>
          <div class="mainheader__pagetitle d-block d-lg-none">
              <div>帐户提现</div>
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
<?php $form = ActiveForm::begin(['options' => ['id' => 'withdraw2', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
                <div class="member__main__wrap member__main__wrap--with__sidemenu pt-3 pt-lg-0 px-3 px-lg-0">
                    <div class="member__page__title d-none d-lg-flex align-items-center">
                        <div class="text">帐户提现</div><span class="title__line"></span>
                    </div>
                    <div class="withdraw__card__wrap balance__sm__wrap">
                        <div class="w_full d-flex justify-content-between">
                            <div class="bankname"><?=  $bankcar->bankno?></div>
                            <div class="cardname"><?= $userinfo->username;?></div>
                        </div>
                        <div class="w_full d-flex justify-content-end">
                            <div class="balance d-inline-flex flex-wrap justify-content-center align-items-center">
                                <div class="text">余额</div>
                                <div class="number"><?= $userinfo->usermoney;?></div>
                                <div class="text">元</div>
                            </div>
                        </div>
                        <div class="card__account"><?=  $bankcar->accntno?></div>
                        <a class="button button__card__modify d-flex justify-content-center align-items-center" href="<?php  echo yii\helpers\Url::to(['web/member/updatecard']) ?>"><img src="../images/icons/icon-card.svg" alt=""></a>
                    </div>
                    <div class="withdraw__form">
                        <div class="withdraw__form__item d-flex align-items-center justify-content-start">
                            <div class="title">省份</div>
                            <div class="value"><?=  $bankcar->city?></div>
                        </div>
                        <div class="withdraw__form__item d-flex align-items-center justify-content-start">
                            <div class="title">市名</div>
                            <div class="value"><?=  $bankcar->address?></div>
                        </div>
                        <div class="withdraw__form__item d-flex align-items-center justify-content-start">
                            <div class="title">开户支行</div>
                            <div class="value"><?=  $bankcar->branch?></div>
                        </div>


                        <div class="withdraw__form__item d-flex align-items-center justify-content-start">
                          <div class="title">提现金额</div>
                          <?= $form->field($model,'price')->input('text',['class'=>'input--normal text-left px-2','style'=>'width:100%','placeholder' => '最少提现￥100'])->label(false) ?>
                        </div>

                    </div>
                </div>
                <div class="member__fixed__bottom member__fixed__bottom--mobile member__fixed__bottom--normal">
                    <div class="button__wrap d-flex align-items-center justify-content-center">
                      <?= Html::submitButton('确认提现',['class' => 'button__confirm button button--base text-center','style' => 'width:100%']);?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
                <?php include("aside_wrap.php"); ?>
            </div>
        </main>
    </div>
  <?php include("sidebar.php"); ?>
    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="/js/member_withdraw.js"></script>
</body>

</html>
