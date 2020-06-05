
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<p>

    <span style="display: none;"></span>

</p>




<script type="text/javascript">
    setInterval('getdata()', 30000);
    function getdata(){
        $.get("<?php  echo yii\helpers\Url::to(['web/update2/index']) ?>", {}, function() {
        });
    }
</script>
