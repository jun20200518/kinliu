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
                                <strong class="card-title">添加產品</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">產品名稱</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="" class="form-control"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">分类</label></div>
                                                <div class="col-12 col-md-10">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">请选择分类</option>
                                                        <option value="1">外汇</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">风控波动范围</label></div>
                                                <div class="col-12 col-md-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">最小值</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                        <span class="input-group-addon" id="basic-addon1">最大值</span>
                                                        <input type="text" id="datetimepicker_end" class="form-control" placeholder="风控波动最大值" name="endtime" value="">
                                                    </div>
                                                    <div class="alert alert-danger">
                                                        <strong>注意：</strong> 客户订单在条件范围内时，会根据订单的涨或跌，自动减或加最小值与最大值之间的随机数，留空或者0则为不开启
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">产品代码</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="请填写产品代码" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">时间玩法间隔</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="请填写时间玩法间隔" class="form-control">
                                                    <div class="alert alert-danger">
                                                        <strong>注意：</strong> 如时间为：1分，3分，5分，8分，则请用字母逗号将时间分开，如输入：。1,3,5,8如没有此玩法则留空必须为四个
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">盈亏比例</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="请填写盈亏比例" class="form-control">
                                                    <div class="alert alert-danger">
                                                        <strong>注意：</strong> 如时间为：1分，3分，5分，8分，则请用字母逗号将时间分开，如输入：。1,3,5,8如没有此玩法则留空必须为四个
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">开市时间</label></div>
                                                <div class="col-12 col-md-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">周一</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">周二</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">周三</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">周四</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">周五</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">周六</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">周日</span>
                                                        <input type="text" id="datetimepicker" class="form-control" placeholder="风控波动最小值" name="starttime" value="">
                                                    </div>
                                                    <div class="alert alert-danger">
                                                        <strong>注意：</strong> 注意： 開市時間為00:00~18:00則輸入 00:00~18:00 開市時間為00:00~03:00 和 08:00~24:00;則輸入 如：00:00~03:00|08:00~24:00 不得出現中文符號，全天不開市請留空,時間一定要填寫準確
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">风控既率</label></div>
                                                <div class="col-12 col-md-10">
                                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="" class="form-control"></textarea>
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
            </div><!-- .animated -->
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
