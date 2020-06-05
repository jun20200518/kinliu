<?php
$session = Yii::$app->session;
$uid = $session['id'];
if($uid == null){
    unset($session['id']);
    header("Location:https://ryan.objkss.cc/index.php?r=web/login/login");
}
set_include_path("/data/htdocs/ryan/views/");
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>

</head>

<body>
    <h1><?php echo $ryan; ?></h1>

</body>



</html>
