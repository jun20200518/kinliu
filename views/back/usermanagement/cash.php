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
                        <div class="card-body card-block">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <select name="stype" id="">
                                                    <option value="1">客戶</option>
                                                    <option value="2">代理商</option>
                                                </select>
                                            </span>
                                            <input type="text" class="form-control" value="" name="username"
                                                placeholder="暱稱/姓名/手機號/編號">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">訂單時間</span>
                                            <input type="text" id="datetimepicker" class="form-control"
                                                placeholder="點擊選擇時間" name="starttime" value="">
                                            <span class="input-group-addon" id="basic-addon1">至</span>
                                            <input type="text" id="datetimepicker_end" class="form-control"
                                                placeholder="點擊選擇時間" name="endtime" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">类型</span>
                                            <select name="ostyle" id="" class="selectpicker show-tick form-control">
                                                <option value="">默認不選</option>
                                                <option value="1">用户充值</option>
                                                <option value="2">后台充值</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                搜索
                            </button>
                            <button type="button" class="btn btn-info btn-sm">
                                刷新
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    提现总金额：
                                </span>
                                <button type="button" class="btn btn-danger">1020100</button>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table-export"
                                                class="table table-striped table-bordered dataTable no-footer"
                                                role="grid" aria-describedby="bootstrap-data-table-export_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending">
                                                            交易帐号</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">交易姓名
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">申请金额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">手续费
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            到帐金额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">提现后金额
                                                        </th>

                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">提现时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">审核时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">下单次数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">代理商
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">理由
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">提现状态
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="交易姓名">廖凡</td>
                                                        <td data-th="申请金额">￥1000000</td>
                                                        <td data-th="手续费">2%</td>
                                                        <td data-th="到帐金额" class="text-danger">￥980</td>
                                                        <td data-th="提现后馀额">12274.40</td>
                                                        <td data-th="提现时间">09月23日 10:29:48</td>
                                                        <td data-th="审核时间">01月01日 08:00:00</td>
                                                        <td data-th="下单次数">下單 29 次</td>
                                                        <td data-th="代理商"><a href="">10000062</a></td>
                                                        <td data-th="理由">會員提現</td>
                                                        <td data-th="提现状态">
                                                            <a href="status.php">
                                                               <button type="button"
                                                                class="btn btn-primary btn-sm">处理/拒绝</button>
                                                            </a>
                                                            <a href="signing.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">签约</button>
                                                            </a>
                                                            <a href="orderlist.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">交易流水</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="交易姓名">廖凡</td>
                                                        <td data-th="申请金额">￥1000000</td>
                                                        <td data-th="手续费">2%</td>
                                                        <td data-th="到帐金额" class="text-danger">￥980</td>
                                                        <td data-th="提现后馀额">12274.40</td>
                                                        <td data-th="提现时间">09月23日 10:29:48</td>
                                                        <td data-th="审核时间">01月01日 08:00:00</td>
                                                        <td data-th="下单次数">下單 29 次</td>
                                                        <td data-th="代理商"><a href="">10000062</a></td>
                                                        <td data-th="理由">會員提現</td>
                                                        <td data-th="提现状态">
                                                            <span class="text-danger">
                                                                已拒绝
                                                            </span>
                                                            <a href="signing.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">签约</button>
                                                            </a>
                                                            <a href="orderlist.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">交易流水</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="交易姓名">廖凡</td>
                                                        <td data-th="申请金额">￥1000000</td>
                                                        <td data-th="手续费">2%</td>
                                                        <td data-th="到帐金额" class="text-danger">￥980</td>
                                                        <td data-th="提现后馀额">12274.40</td>
                                                        <td data-th="提现时间">09月23日 10:29:48</td>
                                                        <td data-th="审核时间">01月01日 08:00:00</td>
                                                        <td data-th="下单次数">下單 29 次</td>
                                                        <td data-th="代理商"><a href="">10000062</a></td>
                                                        <td data-th="理由">會員提現</td>
                                                        <td data-th="提现状态">
                                                            <span class="text-success">
                                                                已通过
                                                            </span>
                                                            <a href="status.php">
                                                               <button type="button"
                                                                class="btn btn-primary btn-sm">处理/拒绝</button>
                                                            </a>
                                                            <a href="signing.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">签约</button>
                                                            </a>
                                                            <a href="orderlist.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">交易流水</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="交易姓名">廖凡</td>
                                                        <td data-th="申请金额">￥1000000</td>
                                                        <td data-th="手续费">2%</td>
                                                        <td data-th="到帐金额" class="text-danger">￥980</td>
                                                        <td data-th="提现后馀额">12274.40</td>
                                                        <td data-th="提现时间">09月23日 10:29:48</td>
                                                        <td data-th="审核时间">01月01日 08:00:00</td>
                                                        <td data-th="下单次数">下單 29 次</td>
                                                        <td data-th="代理商"><a href="">10000062</a></td>
                                                        <td data-th="理由">會員提現</td>
                                                        <td data-th="提现状态">
                                                            <span class="text-success">
                                                                已通过
                                                            </span>
                                                            <a href="status.php">
                                                               <button type="button"
                                                                class="btn btn-primary btn-sm">处理/拒绝</button>
                                                            </a>
                                                            <a href="signing.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">签约</button>
                                                            </a>
                                                            <a href="orderlist.php">
                                                                <button type="button"
                                                                class="btn btn-primary btn-sm">交易流水</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="row mt-3">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="bootstrap-data-table-export_info"
                                                role="status" aria-live="polite">显示页面 1 到 5 总共 57 页s</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="bootstrap-data-table-export_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="bootstrap-data-table-export_previous"><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="0"
                                                            tabindex="0" class="page-link">上一页</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="2"
                                                            tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="3"
                                                            tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="4"
                                                            tabindex="0" class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="5"
                                                            tabindex="0" class="page-link">5</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="6"
                                                            tabindex="0" class="page-link">6</a></li>
                                                    <li class="paginate_button page-item next"
                                                        id="bootstrap-data-table-export_next"><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="7"
                                                            tabindex="0" class="page-link">下一页</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
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
