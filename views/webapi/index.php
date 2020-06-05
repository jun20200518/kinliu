
<?php
header('Access-Control-Allow-Origin: http://base.com');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

echo json_encode($json);
?>
