
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<p>

  <span style="display: none;"></span>


  <?php
   echo "价格：".$datas['Price'];
   //echo $data->username;
  ?>
  <br>
  <?php
   echo "最高：".$datas['High'];
   //echo $data->password;
  ?>
  <br>
  <?php
   echo "最低：".$datas['Low'];
   //echo $data->password;
  ?>

  <br>
  <?php
   echo "买盘：".$datas['Open'];
   //echo $data->password;
  ?>
  <br>
  <?php
   echo "卖盘：".$datas['Close'];
   //echo $data->password;
  ?>
  <br>



</p>




<script type="text/javascript">
  setInterval('getdata()', 3000);
  function getdata(){
  $.get("<?php  echo yii\helpers\Url::to(['web/update/index']) ?>", {}, function() {
  });
}


</script>
