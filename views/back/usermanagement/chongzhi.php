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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>资料审核</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-lg-6 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">手机号</span>
                                            <input type="text" name="orderid" class="form-control" value=""
                                                placeholder="请输入用户手机号">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">充值金额</span>
                                            <input type="text" name="orderid" class="form-control" value=""
                                                placeholder="请输入充值金额">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                提交
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
