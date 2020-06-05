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
        <div class="content">
            <div class="col-sm-12">
                <marquee class="text-danger fz32">澳汇金融</marquee>
            </div>
        </div>
        <div class="content">
            <div class="col-xl-4 col-md-12 fz32 text-dark">
                今日新增用戶：0
            </div>
            <div class="col-xl-4 col-md-12 fz32 text-dark">
                總用戶：34
            </div>
            <div class="col-xl-4 col-md-12 fz32 text-dark">
                用戶總餘額：6077291.6
            </div>
        </div>
        <div class="content mt-3">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-danger p-2 px-5 font-2xl mr-3 float-left text-light">
                            今　日<br>
                            订　单
                        </span>
                        <div class="h5 mb-0 pt-4 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-secondary p-2 px-5 font-2xl mr-3 float-left text-light">
                            客　户<br>
                            盈　亏
                        </span>
                        <div class="h5 mb-0 pt-4 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-primary p-2 px-5 font-2xl mr-3 float-left text-light">
                            今　日<br>
                            流　水
                        </span>
                        <div class="h5 mb-0 pt-4 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-info p-2 px-5 font-2xl mr-3 float-left text-light">
                            今　日<br>
                            充　值
                        </span>
                        <div class="h5 mb-0 pt-4 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-warning p-2 px-5 font-2xl mr-3 float-left text-light">
                            今　日<br>
                            提　现
                        </span>
                        <div class="h5 mb-0 pt-4 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-success p-2 px-5 font-2xl mr-3 float-left text-light">
                            今　日<br>
                            手续费
                        </span>
                        <div class="h5 mb-0 pt-4 text-center">0</div>
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
                                <strong class="card-title">最新交易记录</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="bootstrap-data-table-export_filter"
                                                class="dataTables_filter text-right">
                                                <label>
                                                    <input type="search" class="form-control form-control-sm"
                                                        placeholder="搜寻" aria-controls="bootstrap-data-table-export">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                          <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th>Name</th>
                                                      <th>Position</th>
                                                      <th>Office</th>
                                                      <th>Salary</th>
                                                  </tr>
                                              </thead>
                                              <tbody>

                                              </tbody>
                                          </table>




                                            <table id="bootstrap-data-table-export"
                                                class="table table-striped table-bordered"
                                                role="grid" aria-describedby="bootstrap-data-table-export_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">订单编号
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending">
                                                            交易帐号</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">用户姓名
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">订单时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">产品信息
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">订单状态
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">方向
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">时间/点数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">建仓点数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">平仓点数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">委托金额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">无效委托
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">有效委托
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">实际盈亏
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">买后盈亏
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">所属代理
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">操作
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                  <?php
                                                    echo "<tr role=\"row\" class=\"odd\">";

                                                  ?>


                                                    <tr role="row" class="odd">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-success">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-danger">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>


                                                    <tr role="row" class="even">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-danger">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-success">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-success">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-danger">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-danger">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-success">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-success">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-danger">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-danger">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-success">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-success">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-danger">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-danger">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-success">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-success">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-danger">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="订单编号" class="sorting_1">3470</td>
                                                        <td data-th="交易帐号">10000085</td>
                                                        <td data-th="用户姓名">王大垂</td>
                                                        <td data-th="订单时间">2019-09-23 15:26:13</td>
                                                        <td data-th="产品信息">欧元/美元</td>
                                                        <td data-th="订单状态">结算完成</td>
                                                        <td data-th="方向" class="text-danger">买跌</td>
                                                        <td data-th="时间/点数">60秒</td>
                                                        <td data-th="建仓点数">1.10065</td>
                                                        <td data-th="平仓点数" class="text-success">1.10074</td>
                                                        <td data-th="委托金额" class="text-danger">￥100</td>
                                                        <td data-th="无效委托" class="text-danger">￥0</td>
                                                        <td data-th="有效委托" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理">10000062</td>
                                                        <td data-th="操作"><button><i class="fa fa-th-list"></i></button>
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
