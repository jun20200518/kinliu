
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
    <title>注册页面</title>
    <link rel="shortcut icon" href="/images/icons/favicon.ico">
    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/signup.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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

                    <div class="member__selector pointer"><a class="text-center" href="<?php  echo yii\helpers\Url::to(['web/login/login']) ?>">登入</a></div>
                    <div class="member__selector current">
                        <p class="text-center">注册</p>
                    </div>
                </div>
                <div class="member__notlogin__wrap">
                    <div class="form__wrap d-flex flex-column justify-content-between">
                        <div class="form__member form">
                          <?php $form = ActiveForm::begin(['options' => ['id' => 'signup', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-user-form.svg" alt=""></div>
                                        <?= $form->field($model,'name')->input('text',['class'=>'input--member form-input-input mb-1','placeholder' => '请输入姓名'])->label(false) ?>
                            </div><span class="input__error__message">必填</span>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-phone-form.svg" alt=""></div>
                                        <?= $form->field($model,'phone')->input('text',['class'=>'input--member form-input-input mb-1','placeholder' => '请输入电话号码'])->label(false) ?>
                            </div><span class="input__error__message">必填</span>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-pw-form.svg" alt=""></div>
                                          <?= $form->field($model,'password')->input('password',['class'=>'input--member form-input-input mb-1','placeholder' => '请输入密码'])->label(false) ?>
                            </div><span class="input__error__message">必填</span>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-pw-form.svg" alt=""></div>
                                        <?= $form->field($model,'repassword')->input('password',['class'=>'input--member form-input-input mb-1','placeholder' => '再次确认密码'])->label(false) ?>
                            </div><span class="input__error__message">密码有误</span>
                            <div class="form__item__wrap form__inline__wrap w_full">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined"
                                        src="/images/icons/icon-pw-form.svg" alt=""></div>
                                        <?= $form->field($model,'oid')->input('text',['class'=>'input--member form-input-input mb-1','placeholder' => '推荐码(选填)'])->label(false) ?>
                            </div>

                            <div class="form__item__wrap form__inline__wrap w_full form__verify__code">
                                <div class="form__label__wrap mb-2"><img class="icon-unlogined" src="/images/icons/icon-pw-form.svg" alt=""></div>
                                <?= $form->field($model,'verification_code')->input('text',['class'=>'input--member form-input-input mb-1','style'=>'width:100%','placeholder' => '短信验证码'])->label(false) ?>
                                <span class="button btn__for__code" onclick="sentSMS()">获取验证码</span></div>
                            <?= $form->field($model,'re_verification_code')->hiddenInput('text')->label(false) ?>

                                <?= Html::submitButton('送出',['class' => 'button button--base text-center pointer mt-4 mb-3','style' => 'width:100%']);?>


                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg__unlogined"><img src="/images/bg/bg__unlogin.png" alt=""></div>
    </div>
    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="/js/signup.js"></script>
    <script type="text/javascript">
    function sentSMS() {
        var phone =document.getElementById("singupform-phone").value;
        if(phone.length>=10){
            $.ajax({
                url: "index.php?r=web%2Fapi%2Fsendsms",   //存取Json的网址
                type: "post",
                cache: false,
                data: {phone: phone},
                success: function (res) {
                    var test = "";
                    var resArray = res.split(",");
                    if(resArray[0] == "000"){
                        showalat("验证码已发送");
                        document.getElementById("singupform-re_verification_code").value = resArray[1];
                    }else {
                        showerroralat("验证码发送失败!请联系客服");
                    }

                    console.log("res:" + res);
                },
            });
        }else {
            showerroralat("电话号码输入错误!");
        }
    }
    function showerroralat(title) {
        Swal.fire({
            icon: 'error',
            title: title,
            timer: 1500
        })
    }
    function showalat(title) {

        Swal.fire({
            position: 'center',
            icon: 'success',
            title: title,
            showConfirmButton: false,
            timer: 1500
        })
    }



    </script>
</body>

</html>
