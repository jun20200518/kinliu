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
<!--                        <div class="content mt-3">-->
<!--                            <div class="col-xl-4 col-lg-4 col-md-12">-->
<!--                                <div class="card">-->
<!--                                    <div class="p-0 clearfix">-->
<!--                        <span class="bg-danger p-3 px-5 font-2xl mr-3 float-left text-light">-->
<!--                            盈亏统计-->
<!--                        </span>-->
<!--                                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-xl-4 col-lg-4 col-md-12">-->
<!--                                <div class="card">-->
<!--                                    <div class="p-0 clearfix">-->
<!--                        <span class="bg-secondary p-3 px-5 font-2xl mr-3 float-left text-light">-->
<!--                            交易手数-->
<!--                        </span>-->
<!--                                        <div class="h5 mb-0 p-3 text-center">0 笔</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-xl-4 col-lg-4 col-md-12">-->
<!--                                <div class="card">-->
<!--                                    <div class="p-0 clearfix">-->
<!--                        <span class="bg-primary p-3 px-5 font-2xl mr-3 float-left text-light">-->
<!--                            委托金额-->
<!--                        </span>-->
<!--                                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-xl-4 col-lg-4 col-md-12">-->
<!--                                <div class="card">-->
<!--                                    <div class="p-0 clearfix">-->
<!--                        <span class="bg-info p-3 px-5 font-2xl mr-3 float-left text-light">-->
<!--                            有效金额-->
<!--                        </span>-->
<!--                                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-xl-4 col-lg-4 col-md-12">-->
<!--                                <div class="card">-->
<!--                                    <div class="p-0 clearfix">-->
<!--                        <span class="bg-warning p-3 px-5 font-2xl mr-3 float-left text-light">-->
<!--                            无效金额-->
<!--                        </span>-->
<!--                                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-xl-4 col-lg-4 col-md-12">-->
<!--                                <div class="card">-->
<!--                                    <div class="p-0 clearfix">-->
<!--                        <span class="bg-success p-3 px-5 font-2xl mr-3 float-left text-light">-->
<!--                            手续费　-->
<!--                        </span>-->
<!--                                        <div class="h5 mb-0 p-3 text-center">￥ 0</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
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
                                                    aria-label="Salary: activate to sort column ascending">手续费
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="bootstrap-data-table-export" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">买后盈亏
                                                </th>
                                                <!--                                                        <th class="sorting" tabindex="0"-->
                                                <!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                <!--                                                            colspan="1"-->
                                                <!--                                                            aria-label="Salary: activate to sort column ascending">归属代理商-->
                                                <!--                                                        </th>-->
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
                                            for($i=0;$i<count($data);$i++)
                                            {
                                                echo "<tr role=\"row\" class=\"odd\">";
                                                echo "<td data-th=\"交易帐号\">".$data[$i]->orderno."</td>";
                                                echo "<td data-th=\"用户姓名\">".$data[$i]->username."</td>";
                                                echo "<td data-th=\"订单时间\">".date('Y-m-d', $data[$i]->buytime)."</td>";
                                                echo "<td data-th=\"产品信息\">".$data[$i]->ptitle."</td>";
                                                if($data[$i]->ostaus == 0 ){
                                                    echo "<td data-th=\"订单状态\">交易中</td>";
                                                }elseif($data[$i]->ostaus==1){
                                                    echo "<td data-th=\"订单状态\">平倉</td>";
                                                }
                                                if($data[$i]->ostyle == 0 ){
                                                    echo "<td data-th=\"方向\" class=\"text-danger\">买涨</td>";
                                                }elseif($data[$i]->ostyle==1){
                                                    echo "<td data-th=\"方向\" class=\"text-success\">买跌</td>";
                                                }
                                                echo "<td data-th=\"时间/点数\">".$data[$i]->endprofit."</td>";
                                                echo "<td data-th=\"建仓点数\">".$data[$i]->buyprice."</td>";
                                                echo "<td data-th=\"平仓点数\" class=\"text-danger\">".$data[$i]->sellprice."</td>";
                                                echo "<td data-th=\"委托金额\" >".$data[$i]->fee."</td>";
                                                echo "<td data-th=\"无效委托馀额\" class=\"text-danger\"></td>";
                                                echo "<td data-th=\"有效委托馀额\" class=\"text-danger\"></td>";
                                                if($data[$i]->ostaus == 0 ){
                                                    echo "<td data-th=\"实际盈亏\"></td>";
                                                }else{
                                                    if($data[$i]->ostyle == 0 ){
                                                        echo "<td data-th=\"实际盈亏\" class=\"text-danger\">".($data[$i]->fee)*($data[$i]->endloss/100)."</td>";
                                                    }elseif($data[$i]->ostyle==1){
                                                        echo "<td data-th=\"实际盈亏\" class=\"text-success\">".($data[$i]->fee)*($data[$i]->endloss/100)."</td>";
                                                    }
                                                }
                                                if($data[$i]->ostaus == 0 ){
                                                    echo "<td data-th=\"手续费\"></td>";
                                                }else{
                                                    echo "<td data-th=\"手续费\">".$data[$i]->sx_fee."</td>";
                                                }

                                                if($data[$i]->is_win == 1){
                                                    echo "<td data-th=\"买后盈亏\" class=\"text-danger\">".$data[$i]->fee."</td>";
                                                }elseif($data[$i]->is_win == 2){
                                                    echo "<td data-th=\"买后盈亏\" class=\"text-danger\">2</td>";
                                                }else{
                                                    echo "<td data-th=\"买后盈亏\" class=\"text-danger\">无效</td>";
                                                }


                                                //echo "<td data-th=\"所属代理商\">10000062</td>";
                                                echo "<td data-th=\"单控操作\"></td>";
                                                //echo "<tr role=\"row\" class=\"odd\">";
                                                echo "</tr>";


                                            }

                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


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
