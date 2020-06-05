<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Standard;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php
set_include_path("/data/htdocs/zb/views/");
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="./style/reset.css" />
  <link rel="stylesheet" href="./style/all.css" />
  <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body>

<?php
if($error!=""){
    echo "<script>";
    echo "Swal.fire('".$error."');";
    echo "</script>";
}
?>

  <div class="blurMask"></div>
  <header>
    <!-- 导览列 -->
      <nav class="mainNav">
          <div class="marketSelectMenuButton">
              <img src="img/personal.svg" alt="" />
          </div>
          <a href="<?php echo yii\helpers\Url::to(['web/index/index1']) ?>">
              <img class="mainLogo" src="img/logo/bbx_logo_fff.svg" alt="" />
          </a>
          <div >
              <img src="img/none.svg" alt="" />
          </div>
      </nav>
  </header>
  <!-- 表单 -->
  <div style="height: 100%">
    <form class="personalInfoForm" method="POST">
<!--      <div class="personalInfoForm__content">-->
<!--        <div class="personalInfoForm__account">-->
<!--          <div class="form-row">-->
<!--            <label for="">姓名:</label>-->
<!--            <div>-->
<!--                <div class="form-control">--><?php //echo $userinfo->username ?><!--</div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="form-row">-->
<!--            <label for="">帐户馀额:</label>-->
<!--            <div>-->
<!--              <div class="form-control">--><?php //echo '$'.$userinfo->usermoney ?><!--</div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!---->
<!--        </div>-->
<!---->
<!--      </div>-->
    <?php $form = ActiveForm::begin(['options' => ['id' => 'personalinfo', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
      <div class="personalInfoForm__content">
        <div class="alter">
          <div class="change_password">
            <img src="img/pw.svg" />
<!--            <input class="enter" type="password" name="password"   disabled />-->
              <?= $form->field($model,'beforepwd')->input('password',['placeholder'=>"请输入旧密码",'class'=>"enter"])->label(false) ?>
          </div>
          <div class="change_password">
            <img src="img/pw.svg" />
<!--            <input class="enter" type="password" name="password" placeholder="请输入新密码" disabled />-->
              <?= $form->field($model,'newpwd')->input('password',['placeholder'=>"请输入新密码",'class'=>"enter"])->label(false) ?>
          </div>
          <div class="change_password">
            <img src="img/pw.svg" />
<!--            <input class="enter" type="password" name="password" placeholder="再次确认密码" disabled />-->
              <?= $form->field($model,'repwd')->input('password',['placeholder'=>"请输入确认密码",'class'=>"enter"])->label(false) ?>
          </div>
        </div>
          <?=
            Html::submitButton('确认',['class'=>'btn personalInfoForm__content__password','onclick'=>'pwdError()']);
          ?>
<!--        <a class="">-->
<!--          <img src="img/changepw.svg" alt="" />-->
<!--          修改密码</a>-->
      </div>
    <?php ActiveForm::end(); ?>

  </div>
  </form>

  <!-- 右側選單 -->
  <?php include("leftdeposit.php"); ?>

  <!-- 左側選單 -->
  <?php include("rightdeposit.php"); ?>
  </div>
  <script src="/js/buttonTrigger.js"></script>

</body>

</html>