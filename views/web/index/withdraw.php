<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use backend\models\Standard;
?>
<!DOCTYPE html>
<html lang="en">
<?php
set_include_path("/data/htdocs/zb/views/");
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
</head>


<body>

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
          <div class="userCenterMenuButton">
              <!--        <img src="img/leftnav.svg" alt="" />-->
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
      <form>
        <div class="rmb">
          <span class="font3">提现帐户</span>
          <div class="bank_addaccount">
              <?php
              if($db_banks != null){
                  echo "<input type=\"text\" placeholder=\"$db_banks->bank_nm\" disabled>";
              }else{
                  echo "<input type=\"text\" placeholder=\"\" disabled>";
              }
              ?>

            <a class="btn">修改帐户</a>
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
        <div class="entermoney">
          <span class="font3">提现金额</span>
          <input type="text" placeholder="最少提现¥100">
        </div>
        <div class="confirm">
          <button>确认提现</button>
        </div>
      </form>
    </div>

    <!-- 修改帐户 -->
    <div class="modify_account">
      <div class="modify_account_wrapper">
        <form class="modify_account_head">
          修改银行卡
        </form>
        <div class="modify_account_body">
          <span>密码修改</span>
        </div>
      <?php $form = ActiveForm::begin(['options' => ['id' => 'withdraw', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
        <div class="modify_account_footer">
<!--          <select name="modify_bank" class="modify_bank">-->

            <?php
                $model->bankno=$db_banks->bank_no;
                echo $form->field($model, 'bankno')->dropDownList(ArrayHelper::map($bankslist,'bank_no','bank_nm'),['class'=>'modify_bank','name'=>'modify_bank','value' => $db_bankcard->bankno])->label(false);
            ?>
<!--            <option>银行</option>-->
<!--          </select>-->
            <?= $form->field($model,'accntno')->input('text',['value' => $db_bankcard->accntno])->label(false) ?>
<!--            <input type="text" placeholder="请输入卡号">-->
            <?= $form->field($model,'accntnm')->input('text',['value' => $db_bankcard->accntnm])->label(false) ?>
<!--            <input type="text" placeholder="请输入户名">-->
            <?= $form->field($model,'city')->input('text',['value' => $db_bankcard->city])->label(false) ?>
<!--            <input type="text" placeholder="请输入省份">-->
            <?= $form->field($model,'address')->input('text',['value' => $db_bankcard->address])->label(false) ?>
<!--            <input type="text" placeholder="请输入市名">-->
            <?= $form->field($model,'phone')->input('text',['value' => $db_bankcard->phone])->label(false) ?>
<!--            <input type="text" placeholder="请输入身分证号">-->
            <?= $form->field($model,'branch')->input('text',['value' => $db_bankcard->branch])->label(false) ?>
<!--            <input type="text" placeholder="请输入开户支行">-->
        </div>
        <div class="modify_account_Buttons">
            <?= Html::submitButton('确认',['class' => 'btn modify_account_Buttons_cancel']);?>
<!--          <a href="javascript:;" class="btn modify_account_Buttons_cancel">取消</a>-->
<!--          <a href="javascript:;" class="btn modify_account_Buttons_submit">确定</a>-->
        </div>
      <?php ActiveForm::end(); ?>
      </div>
    </div>

      <!-- 右側選單 -->
      <?php include("leftdeposit.php"); ?>

      <!-- 左側選單 -->
      <?php include("rightdeposit.php"); ?>
  </div>
  <script src="js/buttonTrigger.js"></script>

  <script>
      document.getElementById("modifycardform-bankno").value = <?=$db_bankcard->bankno?>;
  </script>

</body>

</html>
