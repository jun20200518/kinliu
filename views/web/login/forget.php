
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
// $ptitle = $data->ptitle;
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset=utf-8"utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="author" content="3CK">
    <meta name="keyword" content="3CK">
    <meta name="description" content="3CK">
    <title>忘记密码</title>
    <link rel="shortcut icon" href="/images/icons/favicon.ico">
    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/forget.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body class="body">
<?php
if($error!=""){
    echo "<script>";
    echo "Swal.fire('".$error."');";
    echo "</script>";
}
?>
    <div class="page--unlogined d-flex align-items-center justify-content-center">
        <div class="unloginpage__container">
            <div class="d-flex justify-content-center"><img class="d-block member__logo"
                    src="/images/logos/logo-v.svg" alt=""></div>
            <div class="member__notlogin__content">
                <div class="member__select__wrap d-flex align-items-stretch">
                    <div class="member__selector current mt-3">
                        <p class="text-center em">忘记密码</p>
                    </div>
                </div>
                <div class="member__notlogin__wrap">
                    <div class="form__wrap d-flex flex-column justify-content-between">
                        <div class="form__member form">
                          <?php $form = ActiveForm::begin(['options' => ['id' => 'forget', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-user-form.svg" alt=""></div>
                                        <?= $form->field($model,'phone')->input('text',['class'=>'input--member form-input-input mb-1','placeholder' => '请输入电话号码','required minlength'=>'10'])->label(false) ?>
                            </div>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-pw-form.svg" alt=""></div>
                                          <?= $form->field($model,'password')->input('password',['class'=>'input--member form-input-input mb-1','placeholder' => '请输入新密码','required minlength' => '6','maxlength' => '20'])->label(false) ?>

                            </div>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-pw-form.svg" alt=""></div>
                                        <?= $form->field($model,'repassword')->input('password',['class'=>'input--member form-input-input mb-1','placeholder' => '再次确认新密码','required minlength' => '6','maxlength' => '20'])->label(false) ?>

                            </div>


                              <?= Html::submitButton('送出',['class' => 'button button--base text-center pointer mt-4 mb-3']);?>

                            <div class="member__links d-flex align-items-center justify-content-center"><a
                                    class="pointer member__link__item" href="<?php  echo yii\helpers\Url::to(['web/login/login']) ?>">已想起密码，回登入页</a></div>
                                      <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg__unlogined"><img src="/images/bg/bg__unlogin.png" alt=""></div>
    </div>
    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="/js/forget.js"></script>
    <script src="https://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
    <script src="https://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script src="https://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
    <style>
        .error {
            color: red;
            font-weight: bolder;
        }
        .member__notlogin__wrap .button--base {
            width: 100%;
        }
    </style>
</body>

</html>
