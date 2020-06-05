<?php

set_include_path("/data/htdocs/zb/views/");

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php

set_include_path("/data/htdocs/zb/views/");

?>

<head>
    <?php include("header-title.php"); ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div id="right-panel" class="right-panel">
        <?php include("header.php"); ?>
        <div class="content mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>风控管理</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">指定客户亏损</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="请填写客户id"
                                        class="form-control">
                                    <small class="form-text alert alert-danger">说明：
                                        此处设置会员ID（如：8888），多个用户用|符号分开（如：8888|9999）设置之后该会员所有订单都会亏损，请谨慎操作。如停止该功能请在上面留空或者填0，并提交。</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">指定客户赢利</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="请填写客户id"
                                        class="form-control">
                                    <small class="form-text alert alert-danger">说明：
                                        此处设置会员ID（如：8888），多个用户用|符号分开（如：8888|9999）设置之后该会员所有订单都会赢利，请谨慎操作。如停止该功能请在上面留空或者填0，并提交。</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">最小风控值</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="请填写最小风控值"
                                        class="form-control">
                                    <small class="form-text alert alert-danger">说明： 下单达到此金额，则会受到下面风控影响。</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input"
                                        class=" form-control-label">风控既率</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="0-10000:0"
                                        class="form-control"></textarea>
                                    <small class="form-text alert alert-danger">说明：
                                        此处设置会员ID（如：8888），多个用户用|符号分开（如：8888|9999）设置之后该会员所有订单都会赢利，请谨慎操作。如停止该功能请在上面留空或者填0，并提交。</small>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> 提交
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> 清除
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
