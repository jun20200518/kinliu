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
                                <strong class="card-title">参数设置</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">开始提现时间：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="10" class="form-control"><small
                                                        class="form-text text-muted">在指定的时间段内可以提现 例：9</small></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">结束提现时间：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="21" class="form-control"><small
                                                        class="form-text text-muted">结束提现时间</small></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">是否开放用户注册：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="1" class="form-control"><small
                                                        class="form-text text-muted">1开启注册0关闭注册</small></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">每笔平台收取手续费：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="5" class=" form-control"><small
                                                        class="form-text text-muted">如：2%,就填写2即可</small></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">投资金额：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="100|500|2000|5000|10000"
                                                        class=" form-control"><small class="form-text text-muted">以 |
                                                        符号隔开</small></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">单笔最低下单金额：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="100" class=" form-control"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">单笔最高下单金额：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="4000" class=" form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">最大持仓单数：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="10" class=" form-control"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">每笔提现手续费：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="2" class=" form-control">
                                                    <small class="form-text text-muted">以|符号隔开</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">最低提现金额：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="100" class=" form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">单笔提现最大金额：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="400000" class=" form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">当日累积最高提现金额：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="400000" class=" form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">每日最多提现次数</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="400000" class=" form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">是否开启提现：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="1" class="form-control"><small
                                                        class="form-text text-muted">1开启0关闭</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">注册是否需要激活：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="1" class="form-control"><small
                                                        class="form-text text-muted">1不需激活2需要激活</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">订单受风控时间：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="5-15" class="form-control"><small
                                                        class="form-text text-muted">输入10-15，则订单在平仓之前10-15秒开始受到风控影响。</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">单笔最大入金：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="50000" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">单笔最小入金：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="0.01" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">充值金额：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input"
                                                        placeholder="100|200|300|400|500|600|700|800|1000|2000|3000|4000|5000|6000|7000|8000|10000|20000"
                                                        class="form-control"><small
                                                        class="form-text text-muted">用|隔开</small></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">可单控用户：</label></div>
                                                <div class="col-12 col-md-10"><input type="text" id="text-input"
                                                        name="text-input" placeholder="10000066,"
                                                        class="form-control"><small
                                                        class="form-text text-muted">除管理员外的代理商ID，多个用英文逗号隔开如：
                                                        8888,9999</small></div>
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
