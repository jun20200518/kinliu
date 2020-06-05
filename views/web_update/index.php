<p>

  <span style="display: none;"></span>


  <?php
   echo "價格：".$datas['Price'];
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
   echo "買盤：".$datas['Open'];
   //echo $data->password;
  ?>
  <br>
  <?php
   echo "賣盤：".$datas['Close'];
   //echo $data->password;
  ?>
  <br>



</p>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">



  setInterval('getdata()', 3000);
  function getdata(){
  $.get("<?php  echo yii\helpers\Url::to(['web_update/index']) ?>", {}, function() {
  });


}


</script>
