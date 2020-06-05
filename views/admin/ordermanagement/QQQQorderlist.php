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
                                <strong class="card-title">交易记录</strong>
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
<!--                                                        <th class="sorting" tabindex="0"-->
<!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                            colspan="1"-->
<!--                                                            aria-label="Salary: activate to sort column ascending">详情-->
<!--                                                        </th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                  <?php
                                                    //for($i=0;$i<count($data);$i++)
                                                        for($i=0;$i<10;$i++)
                                                    {
                                                      echo "<tr role=\"row\" class=\"odd\">";
                                                      echo "<td data-th=\"交易帐号\">".$data[$i]->orderno."</td>";
                                                      echo "<td data-th=\"用户姓名\">".$data[$i]->uid."</td>";
                                                      echo "<td data-th=\"订单时间\">".date('Y-m-d', $data[$i]->buytime)."</td>";
                                                      echo "<td data-th=\"产品信息\">".$data[$i]->ptitle."</td>";
                                                      echo "<td data-th=\"订单状态\">订单状态</td>";
                                                      if($data[$i]->ostyle == 0 ){
                                                          echo "<td data-th=\"方向\" class=\"text-danger\">买涨</td>";
                                                      }elseif($data[$i]->ostyle==1){
                                                          echo "<td data-th=\"方向\" class=\"text-success\">买跌</td>";
                                                      }
                                                      echo "<td data-th=\"时间/点数\">".$data[$i]->endprofit."</td>";
                                                      echo "<td data-th=\"建仓点数\">1.10065</td>";
                                                      echo "<td data-th=\"平仓点数\" class=\"text-danger\">1.10074</td>";
                                                      echo "<td data-th=\"委托金额\" class=\"text-danger\">￥100</td>";
                                                      echo "<td data-th=\"无效委托馀额\" class=\"text-danger\"></td>";
                                                      echo "<td data-th=\"有效委托馀额\" class=\"text-danger\"></td>";
                                                      echo "<td data-th=\"实际盈亏\" class=\"text-success\">￥-100</td>";
                                                      echo "<td data-th=\"买后盈亏\" class=\"text-danger\">￥12064.4</td>";
                                                      echo "<td data-th=\"所属代理商\">10000062</td>";
                                                      echo "<td data-th=\"单控操作\"></td>";
                                                      //echo "<tr role=\"row\" class=\"odd\">";
                                                        echo "</tr>";


                                                    }

                                                  ?>

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
