
<?php
// header('Content-type: application/json');
//   echo json_encode($res_arr);


  echo "[";
  for($i=0;$i<count($res_arr);$i++){
    $time = $res_arr[$i][time]+(8*60*60);
    if($i==count($res_arr)-1){
      echo "{\"time\": ".$time.", \"value\": ".$res_arr[$i][value]."}";
    }else {
      echo "{\"time\": ".$time.", \"value\": ".$res_arr[$i][value]."},";
    }

  }
  echo "]";
?>
