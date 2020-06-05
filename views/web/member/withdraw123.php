<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use backend\models\Standard;
?>
<!DOCTYPE html>
<html lang="en">
<?php
set_include_path("/data/htdocs/bitflyer/views/");
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="format-detection" content="telephone=no">
  <title>Document</title>
  <link rel="stylesheet" href="style/reset.css" />
  <link rel="stylesheet" href="style/all.css" />
  <link rel="stylesheet" href="style/accout.css" />
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
          <a href="<?php echo "http://kucoin.objkss.cc/index.php?r=web/index/index1" ?>">
              <img class="mainLogo" src="img/logo/bitflyer-logo.svg" alt="" />
          </a>
          <div >
              <img src="img/none.svg" alt="" />
          </div>
      </nav>
  </header>
  <!-- 表单 -->
  <div class="wrapper">
    <div id="main">
      <div class="user">
        <img src="img/personal.svg">
        <span class="font2"><?php echo $userinfo->username ?></span>
        <div class="money">
          <span><?php echo $userinfo->usermoney ?></span>
          <span>元</span>
        </div>
      </div>

        <div class="rmb">
          <span class="font3">提现帐户</span>
          <div class="bank_addaccount">
              <?php
              echo "<input type=\"text\" placeholder=\"$db_banks->bank_nm\" disabled>";
//              if($db_banks != null){
//
//              }else{
//                  echo "<input type=\"text\" placeholder=\"\" disabled>";
//              }
              ?>

            <a href="<?php  echo "http://kucoin.objkss.cc/index.php?r=web/member/drawmoneyinfo2" ?>" class="btn">修改帐户</a>
          </div>

          <input type="text" placeholder="<?php echo $db_bankcard->accntno ?>" disabled>

             <?php
             if($db_bankcard!=""){
                 echo "<table class=\"bankaccount\">";
                 echo "
                    <tr>
                      <th>户名：</th>
                      <td>$db_bankcard->accntnm</td>
                    </tr>
                    <tr>
                      <th>身分证号：</th>
                      <td>$db_bankcard->phone</td>
                    </tr>
                    <tr>
                      <th>省份：</th>
                      <td>$db_bankcard->city</td>
                    </tr>
                    <tr>
                      <th>市名：</th>
                      <td>$db_bankcard->address</td>
                    </tr>
                    <tr>
                      <th>开户支行：</th>
                      <td>$db_bankcard->branch</td>
                    </tr>
                    ";
                 echo "</table>";
             }

              ?>



        </div>
          <?php $form = ActiveForm::begin(['options' => ['id' => 'withdraw', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>

          <div class="entermoney">
              <span class="font3">提现金额</span>
              <?= $form->field($model,'money')->input('number',['placeholder'=>"最少提现¥100"])->label(false) ?>
          </div>
          <div class="confirm">


              <?= Html::submitButton('确认'); ?>


          </div>
          <?php ActiveForm::end(); ?>

<!--        <button onclick="hello()"></button>-->

    </div>

    <!-- 修改帐户 -->


      <!-- 右側選單 -->
      <?php include("leftdeposit.php"); ?>

      <!-- 左側選單 -->
      <?php include("rightdeposit.php"); ?>
  </div>
  <script src="js/buttonTrigger.js"></script>
  <!-- <script>
       function hello(){
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
              footer: '<a href>Why do I have this issue?</a>'
          })
      }
  </script> -->

</body>

</html>
