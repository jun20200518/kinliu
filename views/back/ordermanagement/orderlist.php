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
                            <strong>交易流水</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="get">
                                <div class="row">

                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">訂單編號</span>
                                            <input type="text" name="orderid" class="form-control" value=""
                                                placeholder="輸入訂單編號/訂單id">
                                        </div>
                                    </div>

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
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">漲跌</span>
                                            <select name="ostyle" id="" class="selectpicker show-tick form-control">
                                                <option value="">默認不選</option>
                                                <option value="1">買漲</option>
                                                <option value="2">買跌</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">盈虧</span>
                                            <select name="ploss" id="" class="selectpicker show-tick form-control">
                                                <option value="">默認不選</option>
                                                <option value="1">贏利</option>
                                                <option value="2">虧損</option>
                                                <option value="3">無效</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">產品</span>
                                            <select name="pid" id="" class="selectpicker show-tick form-control">
                                                <option value="">默認不選</option>
                                                <!--  -->
                                                <option value="26">国际黄金</option>
                                                <!--  -->
                                                <option value="27">英镑/加元</option>
                                                <!--  -->
                                                <option value="28">英镑/澳元</option>
                                                <!--  -->
                                                <option value="29">英镑/日元</option>
                                                <!--  -->
                                                <option value="30">美元/日元</option>
                                                <!--  -->
                                                <option value="31">欧元/英镑</option>
                                                <!--  -->
                                                <option value="32">欧元/美元</option>
                                                <!--  -->
                                                <option value="34">莱特币</option>
                                                <!--  -->
                                                <option value="35">比特币</option>
                                                <!--  -->

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">狀態</span>
                                            <select name="ostaus" id="" class="selectpicker show-tick form-control">
                                                <option value="">默認不選</option>
                                                <option value="1">建倉</option>
                                                <option value="2">平倉</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> 搜索
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary">搜索全部</button>
                    <p class="text-danger d-inline">默认为当天订单</p>
                    <button type="button" class="btn btn-info">自动刷新</button>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">交易记录</strong>
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
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">交易帐号
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending">
                                                            用户姓名</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">订单时间
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
                                                            aria-label="Salary: activate to sort column ascending">平昌点数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">委托馀额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            无效委托金额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            有效无效委托
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
                                                            aria-label="Salary: activate to sort column ascending">归属代理商
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">单控操作
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">详情
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                  <?php
                                                    for($i=0;$i<count($data);$i++)
                                                    {
                                                      echo "<tr role=\"row\" class=\"odd\">";
                                                      echo "<td data-th=\"交易帐号\">10000085</td>";
                                                      echo "<td data-th=\"用户姓名\">王大垂</td>";
                                                      echo "<td data-th=\"订单时间\">2019-09-23 15:26:13</td>";
                                                      echo "<td data-th=\"产品信息\">欧元/美元</td>";
                                                      echo "<td data-th=\"订单状态\">结算完成</td>";
                                                      echo "<td data-th=\"方向\" class=\"text-success\">买跌</td>";
                                                      echo "<td data-th=\"时间/点数\">60秒</td>";
                                                      echo "<td data-th=\"建仓点数\">1.10065</td>";
                                                      echo "<td data-th=\"平仓点数\" class=\"text-danger\">1.10074</td>";
                                                      echo "<td data-th=\"委托金额\" class=\"text-danger\">￥100</td>";
                                                      echo "<td data-th=\"无效委托馀额\" class=\"text-danger\">￥0</td>";
                                                      echo "<td data-th=\"有效委托馀额\" class=\"text-danger\">￥100</td>";
                                                      echo "<td data-th=\"实际盈亏\" class=\"text-success\">￥-100</td>";
                                                      echo "<td data-th=\"买后盈亏\" class=\"text-danger\">￥12064.4</td>";
                                                      echo "<td data-th=\"所属代理商\">10000062</td>";
                                                      echo "<td data-th=\"单控操作\"><button><i
                                                                  class=\"fa fa-th-list\"></i></button></td>";
                                                      echo "<tr role=\"row\" class=\"odd\">";



                                                    }

                                                  ?>
                                                    <!--
















                                                        <td data-th="详情"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr> -->
                                                    <!-- <tr role="row" class="even">
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
                                                        <td data-th="无效委托馀额" class="text-danger">￥0</td>
                                                        <td data-th="有效委托馀额" class="text-danger">￥100</td>
                                                        <td data-th="实际盈亏" class="text-success">￥-100</td>
                                                        <td data-th="买后盈亏" class="text-danger">￥12064.4</td>
                                                        <td data-th="所属代理商">10000062</td>
                                                        <td data-th="单控操作"><button><i
                                                                    class="fa fa-th-list"></i></button></td>
                                                        <td data-th="详情"><button><i class="fa fa-th-list"></i></button>
                                                        </td>
                                                    </tr> -->
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
        <div class="content mt-3">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-danger p-3 px-5 font-2xl mr-3 float-left text-light">
                            盈亏统计
                        </span>
                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-secondary p-3 px-5 font-2xl mr-3 float-left text-light">
                            交易手数
                        </span>
                        <div class="h5 mb-0 p-3 text-center">0 笔</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-primary p-3 px-5 font-2xl mr-3 float-left text-light">
                            委托金额
                        </span>
                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-info p-3 px-5 font-2xl mr-3 float-left text-light">
                            有效金额
                        </span>
                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-warning p-3 px-5 font-2xl mr-3 float-left text-light">
                            无效金额
                        </span>
                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-success p-3 px-5 font-2xl mr-3 float-left text-light">
                            手续费　
                        </span>
                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
