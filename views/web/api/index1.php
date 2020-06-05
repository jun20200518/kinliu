

  <?php
  $time = ($productdata['UpdateTime']);
    echo "[";
    echo "{\"time\": ".$productdata['UpdateTime'].", \"value\": ".$productdata['Price']."}";
    echo "]";
  ?>
