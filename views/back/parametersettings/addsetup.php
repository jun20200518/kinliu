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
                                <strong class="card-title">添加设置</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">配置标识：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="10" class="form-control"><small
                                                        class="form-text text-muted">用于函数调用，只能使用英文且不能重复</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">配置标题：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="10" class="form-control"><small
                                                        class="form-text text-muted">用于后台显示的配置标题</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">排序：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="10" class="form-control"><small
                                                        class="form-text text-muted">用于分组显示的顺序</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">配置类型：</label></div>
                                                <div class="col-12 col-md-10">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">字符</option>
                                                        <option value="1">文本</option>
                                                    </select>
                                                    <small class="form-text text-muted">系統會根據不同類型解析配置值</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">配置分組：</label></div>
                                                <div class="col-12 col-md-10">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">参数配置</option>
                                                        <option value="1">基本配置</option>
                                                    </select>
                                                    <small class="form-text text-muted">配置分組 用於批量設置 不分組則不會顯示在系統設置中</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">说明：</label></div>
                                                <div class="col-12 col-md-10">
                                                    <input type="text" id="text-input" name="text-input" placeholder=""
                                                        class="form-control">
                                                    <small class="form-text text-muted">用于对配置的说明</small>
                                                </div>
                                            </div>
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
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
