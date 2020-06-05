
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
// $ptitle = $data->ptitle;
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no" name="viewport">
	<meta content="3CK" name="author">
	<meta content="3CK" name="keyword">
	<meta content="3CK" name="description">
	<title>新增银行卡</title>
	<link href="/css/vendor.css" rel="stylesheet">
	<link href="/css/member_card_modify.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
            <div>新增银行卡</div>
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
			<div class="page__container member__container d-flex flex-column justify-content-between justify-content-lg-start member__with__sidebar">
				<div class="member__main__wrap member__main__wrap--with__sidemenu pt-3 pt-lg-0 px-3 px-lg-0">
					<div class="member__page__title d-none d-lg-flex align-items-center">
						<div class="text">
                            新增银行卡
						</div><span class="title__line"></span>
					</div>
					<?php $form = ActiveForm::begin(['options' => ['id' => 'cardmodify', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
					<div class="member__form member__form--sm">
						<div class="member__form__item d-flex align-items-center justify-content-start mb-3">
							<!--  -->
							<?php echo $form->field($model, 'bankno')->dropDownList(ArrayHelper::map($bankslist,bank_no,bank_nm),['class'=>'select--light w_full'])->label(false);
								?>
						</div>
                        <div class="member__form__item d-flex align-items-center justify-content-start mb-3">
                            <?= $form->field($model,'city')->input('text',['class'=>'input--light w_full text-left','placeholder' => '省份'])->label(false) ?>
                        </div>
						<div class="member__form__item d-flex align-items-center justify-content-start mb-3">
							<?= $form->field($model,'address')->input('text',['class'=>'input--light w_full text-left','placeholder' => '市名'])->label(false) ?>
						</div>
                        <div class="member__form__item d-flex align-items-center justify-content-start mb-3">
                            <?= $form->field($model,'branch')->input('text',['class'=>'input--light w_full text-left','placeholder' => '开户支行'])->label(false) ?>
                        </div>
						<div class="member__form__item d-flex align-items-center justify-content-start mb-3">
							<?= $form->field($model,'accntnm')->input('text',['class'=>'input--light w_full text-left','placeholder' => '开户名'])->label(false) ?>
						</div>
						<div class="member__form__item d-flex align-items-center justify-content-start mb-3">
							<?= $form->field($model,'accntno')->input('text',['class'=>'input--light w_full text-left','placeholder' => '卡号'])->label(false) ?>
						</div>
						<div class="member__form__item d-flex align-items-center justify-content-start mb-3">
							<?= $form->field($model,'phone')->input('text',['class'=>'input--light w_full text-left','placeholder' => '身份证号码'])->label(false) ?>
						</div>
					</div>
				</div>
				<div class="member__fixed__bottom member__fixed__bottom--mobile member__fixed__bottom--normal">
					<div class="btns__confirm__wrap d-flex align-items-center justify-content-center">
						<!--  -->

							<?= Html::submitButton('确认修改',['class' => 'button button--base','style' => 'width:100%']);?>

					</div>
				</div>
				<?php ActiveForm::end(); ?>
				<?php include("aside_wrap.php"); ?>
			</div>
		</main>
	</div>
    <?php include("sidebar.php"); ?>

	<div aria-hidden="true" class="modal__bottom modal modal--dark fade" id="modal__confirm" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog--mobile--bottom justify-content-center align-items-end align-items-lg-center">
			<div class="modal-content">

				<div class="modal-body my-5">
					<div class="btns__confirm__wrap d-flex align-items-center justify-content-center pb-5">
						<div aria-label="Close" class="button button--h--white" data-dismiss="modal">
                            取消修改
                        </div>
						<div aria-label="Close" class="button button--base" data-dismiss="modal">
                            确认修改
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/js/vendor.js" type="text/javascript">
	</script>
	<script src="/js/member_card_modify.js" type="text/javascript">
	</script>
</body>
</html>
