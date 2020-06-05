<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
// $ptitle = $data->ptitle;
?>

<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>登入</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style/style.css" />
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body background="img/bg.jpg">
  <div id="header">
    <div class="logo">
      <img src="img//bitFlyer3.svg" />
    </div>
  </div>

  <div id="main">
    <div id="tab1">
      <ul>
        <li>
          <a href="#login" class="current" style="float: left;">登入</a>
        </li>
        <li><a href="#registered">注册</a></li>
        <li><a href="#forgetpw" style="float: right ;">忘记密码</a></li>
      </ul>
      <div id="contents">
        <div id="login" class="content">
<!--            --><?php //$form = ActiveForm::begin(['options' => ['id' => 'login', 'method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'form-horizontal']]) ?>
            <form style="margin-top:60px ;">
            <section class="frame">
              <img src="img/phone.svg" />
<!--              <input class="enter" type="text" placeholder="请输入电话号码" />-->
<!--                --><?//= $form->field($model,'admin_account')->input('text',['class'=>'enter','placeholder'=>'请输入电话号码'])->label(false) ?>

            </section>
            <section class="frame">
              <img src="img/pw.svg" />
<!--              <input class="enter" type="password" placeholder="请输入密码" />-->
<!--                --><?//= $form->field($model,'admin_password')->input('password',['class'=>'enter','placeholder'=>'请输入密码'])->label(false) ?>
            </section>

            <button class="btn" type="submit">
              <img src="img/login.svg" />登入
            </button>
          </form>
        </div>

        <div id="registered" class="content">
          <form>
            <section class="frame">
              <img src="img/entername.svg" />
              <input class="enter" type="text" placeholder="请输入姓名" />
            </section>
            <section class="frame">
              <img src="img/phone.svg" />
              <input class="enter" type="text" placeholder="请输入电话号码" />
            </section>
            <section class="frame">
              <img src="img/pw.svg" />
              <input class="enter" type="text" placeholder="请输入密码" />
            </section>
            <section class="frame">
              <img src="img/pw.svg" />
              <input class="enter" type="text" placeholder="再次确认密码" />
            </section>
            <section class="frame">
              <img src="img/recommend.svg" />
              <input class="enter" type="text" placeholder="推荐码(选填)" />
            </section>
            <button class="btn2" type="submit">
              <img src="img/submit.svg" />送出
            </button>
          </form>
        </div>

        <div id="forgetpw" class="content">
          <form style="margin-top: 40px;">
            <section class="frame">
              <img src="img/phone.svg" />
              <input class="enter" type="text" placeholder="请输入电话号码" />
            </section>
            <section class="frame">
              <img src="img/pw.svg" />
              <input class="enter" type="text" placeholder="请输入密码" />
            </section>
            <section class="frame">
              <img src="img/pw.svg" />
              <input class="enter" type="text" placeholder="再次确认密码" />
            </section>

            <button class="btn3" type="submit">
              <img src="img/submit.svg" />送出
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="footer"></div>
</body>

</html>