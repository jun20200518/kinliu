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
  <title>bitFlyer</title>
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
  <!-- 天数 -->
  <div class="wrapper">
    <div class="period_buttons">
      <a href="<?php echo yii\helpers\Url::to(['web/member/btn_one']) ?>" class="btn">1天</a>
      <a href="<?php echo yii\helpers\Url::to(['web/member/btn_three']) ?>" class="btn">3天</a>
      <a href="<?php echo yii\helpers\Url::to(['web/member/btn_seven']) ?>" class="btn">7天</a>
      <a href="<?php echo yii\helpers\Url::to(['web/member/btn_thirty']) ?>" class="btn">30天</a>
      <a href="<?php echo yii\helpers\Url::to(['web/member/btn_all']) ?>" class="btn">总明细</a>
    </div>
    <!-- 申请状态 -->
    <table class="withdrawRecord">
      <thead>
        <tr>
          <th>提现申请</th>
<!--          <th>入帐</th>-->
          <th>金额</th>
          <th></th>
          <th>状态</th>
        </tr>
      </thead>
      <tbody>

      <?php
//      if($balance =!null){
          for($i=0;$i<@count($balance);$i++){
              echo "<tr>";
              echo "<td>";
              echo    "<span>".date('Y-m-d H:i:s',$balance[$i]->bptime)."</span><br />";
//            echo    "<span>".date('H:i:s',$balance[$i]->bptime)."</span><br />";
              echo "</td>";
//            echo "<td>";
//            echo    "<span></span><br />";
//            echo    "<span>1234-5678-910</span>";
//            echo "</td>";
              echo    "<td>".$balance[$i]->bpprice."</td>";
              echo "<td>";
              if($balance[$i]->isverified ==0){
                  echo    "<div class=\"stopcircle\"></div>";
              }elseif ($balance[$i]->isverified ==1){
                  echo    "<div class=\"okcircle\"></div>";
              }elseif($balance[$i]->isverified ==2){
                  echo    "<div class=\"reviewcircle\"></div>";
              }
              echo "</td>";
              if($balance[$i]->isverified ==0){
                  echo    "<td>未通过</td>";
              }elseif ($balance[$i]->isverified ==1){
                  echo    "<td>通过</td>";
              }elseif($balance[$i]->isverified ==2){
                  echo    "<td>审核中</td>";
              }
              echo "</tr>";
          }
//      }

      ?>




      </tbody>
    </table>
      <!-- 右側選單 -->
      <?php include("leftdeposit.php"); ?>

      <!-- 左側選單 -->
      <?php include("rightdeposit.php"); ?>
  </div>
  <script src="js/buttonTrigger.js"></script>
</body>

</html>
