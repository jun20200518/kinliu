<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
// $ptitle = $data->ptitle;
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<?php

set_include_path("/data/htdocs/zb/views/");

?>

<head>
    <?php include("header-title.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body class="bg-dark">
<?php
if($error!=""){
echo "<script>";
    echo "Swal.fire('".$error."');";
    echo "</script>";
}
?>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <span>
                        后台登入系统
                    </span>
                </div>

                <div class="login-form">
                    <?php $form = ActiveForm::begin(['options' => ['id' => 'login', 'method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'form-horizontal']]) ?>

                    <div class="form-group">
                            <label>帐号</label>
<!--                            <input type="text" id="exampleInputName2" placeholder="请输入帐号" required="" class="form-control">-->
                        <?= $form->field($model,'admin_account')->input('text',['class'=>'form-control','placeholder'=>'请输入帐号'])->label(false) ?>

                    </div>
                        <div class="form-group">
                            <label>密码</label>
<!--                            <input type="password" class="form-control" placeholder="请输入密码">-->
                            <?= $form->field($model,'admin_password')->input('password',['class'=>'form-control','placeholder'=>'请输入密码'])->label(false) ?>


                        </div>
<!--                                <div class="checkbox">-->
<!--                                    <label>-->
<!--                                <input type="checkbox"> 记住帐号-->
<!--                            </label>-->
                                    <!--<label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>-->
<!--                                </div>-->
<!--                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">登入</button>-->
                        <?= Html::submitButton('登入',['class' => 'btn btn-success btn-flat m-b-30 m-t-30']);?>
                                <!--
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div>
                                -->
                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>