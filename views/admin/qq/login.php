
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

<?php

set_include_path("/data/htdocs/zb/views/");

?>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <?php include("header-title.php"); ?>
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <span>
                    後台登入系統
                    </span>
                </div>
                <div class="login-form">
                    <!-- <form> -->

                      <?php $form = ActiveForm::begin(['options' => ['id' => 'login', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
                        <div class="form-group">
                            <label>帐号</label>
                              <?= $form->field($model,'account')->input('text',['class'=>'form-control','placeholder' => '请输入帐号'])->label(false) ?>
                            <!-- <input type="text" id="exampleInputName2" placeholder="请输入帐号" required="" class="form-control"> -->
                        </div>
                            <div class="form-group">
                                <label>密码</label>
                                <?= $form->field($model,'password')->input('password',['class'=>'form-control','placeholder' => '请输入密码'])->label(false) ?>
                                <!-- <input type="password" class="form-control" placeholder="请输入密码"> -->
                        </div>
                                <!-- <div class="checkbox">
                                    <label>
                                <input type="checkbox"> 记住帐号
                            </label>


                                </div> -->
                                <?= Html::submitButton('登入',['class' => 'btn btn-success btn-flat m-b-30 m-t-30']);?>
                                <!-- <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">登入</button> -->
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
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <?php include("window.php"); ?> -->
    <?php include("footer-js.php"); ?>
</body>

</html>
