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
  <link rel="stylesheet" href="/style/reset.css" />
  <link rel="stylesheet" href="/style/all.css" />
</head>

<body>
  <div class="blurMask"></div>
  <header>
    <!-- 导览列 -->
      <nav class="mainNav">
          <div class="marketSelectMenuButton">
              <img src="img/personal.svg" alt="" />
          </div>
          <a href="<?php  echo yii\helpers\Url::to(['web/index/index1']) ?>">
              <img class="mainLogo"  src="img/logo/bbx_logo_fff.svg" alt="" />
          </a>
          <div class="userCenterMenuButton">
<!--              <img src="img/leftnav.svg" alt="" />-->
          </div>
      </nav>
  </header>
  <!-- 天数 -->
  <div class="wrapper">
    <div class="period_buttons">
      <a href="<?php  echo yii\helpers\Url::to(['web/member/fund_one']) ?>" class="btn">1天</a>
      <a href="<?php  echo yii\helpers\Url::to(['web/member/fund_three']) ?>" class="btn">3天</a>
      <a href="<?php  echo yii\helpers\Url::to(['web/member/fund_seven']) ?>" class="btn">7天</a>
      <a href="<?php  echo yii\helpers\Url::to(['web/member/fund_thirty']) ?>" class="btn">30天</a>
      <a href="<?php  echo yii\helpers\Url::to(['web/member/fund_all']) ?>" class="btn">总明细</a>
    </div>
    <!-- 申请状态 -->
    <table class="fundRecord">
      <thead>
        <tr>
          <th>项目</th>
          <th>金流</th>
          <th>馀额</th>
        </tr>
      </thead>
      <tbody>

      <?php
        for($i=0;$i<count($db_funds_log);$i++){
            echo "<tr>";
            echo "<td class='fundRecord__item'>";
            echo "<span class='font-weight-bold'>".$db_funds_log[$i]->title."</span><br />";
            echo "<span>".date("Y-m-d H:i:s",$db_funds_log[$i]->time)."</span>";
            echo "</td>";
            echo "<td>".$db_funds_log[$i]->price."</td>";
            echo "<td>".$db_funds_log[$i]->usermoney."</td>";
            echo "</tr>";
        }
      ?>



<!--      <tr class='success'>-->
<!--        <td class='fundRecord__item'>-->
<!--          <span class='font-weight-bold'>上分</span><br />-->
<!--          <span>2019/07/07 11:02:42</span>-->
<!--        </td>-->
<!--        <td>＋1000.00</td>-->
<!--        <td>1000.00</td>-->
<!--      </tr>-->

      </tbody>
    </table>
      <!-- 左側選單 -->
      <?php include("leftdeposit.php"); ?>
      <!-- 右側選單 -->
      <?php include("rightdeposit.php"); ?>

  </div>
  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="./js/buttonTrigger.js"></script>
</body>

</html>