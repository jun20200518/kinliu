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
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">基本设置</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">网站名称：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="澳汇金融" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">后台公告</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="澳汇金融" class="form-control"><small
                                                        class="form-text text-muted">系统公告</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">网站是否关闭</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="1" class="form-control"><small
                                                        class="form-text text-muted">0关闭，1开启</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    提交
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
