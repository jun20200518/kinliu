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
                                    <div class="col-lg-4 mar-10">
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

                                    <div class="col-lg-8 mar-10">
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
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                搜索
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="col-xl-2 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-danger p-3 px-3 font-2xl  float-left text-light">
                            入金总额
                        </span>
                        <div class="h5 mb-0 pt-3 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-secondary p-3 px-3 font-2xl  float-left text-light">
                            出金总额
                        </span>
                        <div class="h5 mb-0 pt-3 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-primary p-3 px-3 font-2xl  float-left text-light">
                            佣金总额
                        </span>
                        <div class="h5 mb-0 pt-3 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-info p-3 px-3 font-2xl  float-left text-light">
                            红利总额
                        </span>
                        <div class="h5 mb-0 pt-3 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-warning p-3 px-3 font-2xl  float-left text-light">
                            当日盈亏
                        </span>
                        <div class="h5 mb-0 pt-3 text-center">0</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-success p-3 px-3 font-2xl  float-left text-light">
                            历史盈亏
                        </span>
                        <div class="h5 mb-0 pt-3 text-center">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-danger">搜索全部</button>
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
                                <strong class="card-title">資金報表</strong>
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
                                                            aria-label="Name: activate to sort column descending">用户
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending">
                                                            代理商</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">入金总额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">入金次数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">手动入金
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">出金总额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">出金次数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">出金审核中
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">佣金
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">红利
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">当前馀额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">实际盈亏
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">净入金
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">当日盈亏
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">总盈亏
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">总手续费
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td data-th="用戶">10000085</td>
                                                        <td data-th="代理商">a47ra4</td>
                                                        <td data-th="入金总额">0</td>
                                                        <td data-th="入金次数">0</td>
                                                        <td data-th="手动入金">430000</td>
                                                        <td data-th="出金总额">0</td>
                                                        <td data-th="出金次数">0</td>
                                                        <td data-th="出金审核中">0</td>
                                                        <td data-th="佣金">0</td>
                                                        <td data-th="红利">0</td>
                                                        <td data-th="当前馀额">70000.00</td>
                                                        <td data-th="实际馀额">430000</td>
                                                        <td data-th="净入金">0</td>
                                                        <td data-th="当日盈亏">0</td>
                                                        <td data-th="总盈亏">0</td>
                                                        <td data-th="总手续费">0</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="用戶">10000085</td>
                                                        <td data-th="代理商">a47ra4</td>
                                                        <td data-th="入金总额">0</td>
                                                        <td data-th="入金次数">0</td>
                                                        <td data-th="手动入金">430000</td>
                                                        <td data-th="出金总额">0</td>
                                                        <td data-th="出金次数">0</td>
                                                        <td data-th="出金审核中">0</td>
                                                        <td data-th="佣金">0</td>
                                                        <td data-th="红利">0</td>
                                                        <td data-th="当前馀额">70000.00</td>
                                                        <td data-th="实际馀额">430000</td>
                                                        <td data-th="净入金">0</td>
                                                        <td data-th="当日盈亏">0</td>
                                                        <td data-th="总盈亏">0</td>
                                                        <td data-th="总手续费">0</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="用戶">10000085</td>
                                                        <td data-th="代理商">a47ra4</td>
                                                        <td data-th="入金总额">0</td>
                                                        <td data-th="入金次数">0</td>
                                                        <td data-th="手动入金">430000</td>
                                                        <td data-th="出金总额">0</td>
                                                        <td data-th="出金次数">0</td>
                                                        <td data-th="出金审核中">0</td>
                                                        <td data-th="佣金">0</td>
                                                        <td data-th="红利">0</td>
                                                        <td data-th="当前馀额">70000.00</td>
                                                        <td data-th="实际馀额">430000</td>
                                                        <td data-th="净入金">0</td>
                                                        <td data-th="当日盈亏">0</td>
                                                        <td data-th="总盈亏">0</td>
                                                        <td data-th="总手续费">0</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="用戶">10000085</td>
                                                        <td data-th="代理商">a47ra4</td>
                                                        <td data-th="入金总额">0</td>
                                                        <td data-th="入金次数">0</td>
                                                        <td data-th="手动入金">430000</td>
                                                        <td data-th="出金总额">0</td>
                                                        <td data-th="出金次数">0</td>
                                                        <td data-th="出金审核中">0</td>
                                                        <td data-th="佣金">0</td>
                                                        <td data-th="红利">0</td>
                                                        <td data-th="当前馀额">70000.00</td>
                                                        <td data-th="实际馀额">430000</td>
                                                        <td data-th="净入金">0</td>
                                                        <td data-th="当日盈亏">0</td>
                                                        <td data-th="总盈亏">0</td>
                                                        <td data-th="总手续费">0</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="用戶">10000085</td>
                                                        <td data-th="代理商">a47ra4</td>
                                                        <td data-th="入金总额">0</td>
                                                        <td data-th="入金次数">0</td>
                                                        <td data-th="手动入金">430000</td>
                                                        <td data-th="出金总额">0</td>
                                                        <td data-th="出金次数">0</td>
                                                        <td data-th="出金审核中">0</td>
                                                        <td data-th="佣金">0</td>
                                                        <td data-th="红利">0</td>
                                                        <td data-th="当前馀额">70000.00</td>
                                                        <td data-th="实际馀额">430000</td>
                                                        <td data-th="净入金">0</td>
                                                        <td data-th="当日盈亏">0</td>
                                                        <td data-th="总盈亏">0</td>
                                                        <td data-th="总手续费">0</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="用戶">10000085</td>
                                                        <td data-th="代理商">a47ra4</td>
                                                        <td data-th="入金总额">0</td>
                                                        <td data-th="入金次数">0</td>
                                                        <td data-th="手动入金">430000</td>
                                                        <td data-th="出金总额">0</td>
                                                        <td data-th="出金次数">0</td>
                                                        <td data-th="出金审核中">0</td>
                                                        <td data-th="佣金">0</td>
                                                        <td data-th="红利">0</td>
                                                        <td data-th="当前馀额">70000.00</td>
                                                        <td data-th="实际馀额">430000</td>
                                                        <td data-th="净入金">0</td>
                                                        <td data-th="当日盈亏">0</td>
                                                        <td data-th="总盈亏">0</td>
                                                        <td data-th="总手续费">0</td>
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
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
