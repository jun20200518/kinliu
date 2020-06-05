<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
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
          <div >
              <img src="img/none.svg" alt="" />
          </div>
      </nav>
  </header>
  <!-- 表单 -->


    <!-- 修改帐户 -->
      <div class="modify_account">
          <div class="modify_account_wrapper">
              <form class="modify_account_head">
                  新增银行卡
              </form>

              <div class="modify_account_footer">
                  <select name="modify_bank" class="modify_bank">
                      <option>银行</option>
                  </select>
                  <input type="text" placeholder="请输入帐号">
                  <input type="text" placeholder="请输入户名">
                  <input type="text" placeholder="请输入省份">
                  <input type="text" placeholder="请输入市名">
                  <input type="text" placeholder="请输入身分证号">
                  <input type="text" placeholder="请输入开户支行">
              </div>
              <div class="modify_account_Buttons">
                  <a href="javascript:;" class="btn modify_account_Buttons_cancel">取消</a>
                  <a href="javascript:;" class="btn modify_account_Buttons_submit">确定</a>
              </div>
          </div>
      </div>

      <!-- 右側選單 -->
      <?php include("leftdeposit.php"); ?>

      <!-- 左側選單 -->
      <?php include("rightdeposit.php"); ?>
  </div>
  <script src="js/buttonTrigger.js"></script>

</body>

</html>
