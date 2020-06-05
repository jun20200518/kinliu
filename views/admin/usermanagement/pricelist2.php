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
                                                    <!--                                                        <th class="sorting" tabindex="0"-->
                                                    <!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                    <!--                                                            colspan="1"-->
                                                    <!--                                                            aria-label="Position: activate to sort column ascending">-->
                                                    <!--                                                            代理商</th>-->
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">上分总额
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">上分次数
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">手动上分
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">下分审核中
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">下分次数
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">下分总额
                                                    </th>
                                                    <!--                                                        <th class="sorting" tabindex="0"-->
                                                    <!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                    <!--                                                            colspan="1"-->
                                                    <!--                                                            aria-label="Salary: activate to sort column ascending">佣金-->
                                                    <!--                                                        </th>-->
                                                    <!--                                                        <th class="sorting" tabindex="0"-->
                                                    <!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                    <!--                                                            colspan="1"-->
                                                    <!--                                                            aria-label="Salary: activate to sort column ascending">红利-->
                                                    <!--                                                        </th>-->
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">当前馀额
                                                    </th>
                                                    <!--                                                        <th class="sorting" tabindex="0"-->
                                                    <!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                    <!--                                                            colspan="1"-->
                                                    <!--                                                            aria-label="Salary: activate to sort column ascending">实际盈亏-->
                                                    <!--                                                        </th>-->
                                                    <!--                                                        <th class="sorting" tabindex="0"-->
                                                    <!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                    <!--                                                            colspan="1"-->
                                                    <!--                                                            aria-label="Salary: activate to sort column ascending">净上分-->
                                                    <!--                                                        </th>-->
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
                                                <?php
                                                //                                                    $NowTime=date("Y-m-d");


//                                                echo "<td data-th=\"用戶\">".$db_userinfo->username."</td>";
//                                                $dbtemp=count($db_userinfo);

                                                for($i=0;$i<@count($db_userinfo);$i++){
                                                    echo "<tr role=\"row\" class=\"odd\">";
                                                    echo "<td data-th=\"用戶\">$db_userinfo->username</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_balance_chongzhi);$j++){
                                                        if($db_balance_chongzhi[$j]->isverified ==1){
                                                            $temp=$db_balance_chongzhi[$j]->bpprice+$temp;
                                                        }
                                                    }
                                                    echo "<td data-th=\"上分总额\">$temp</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_balance_chongzhi);$j++){
                                                        if($db_balance_chongzhi[$j]->isverified ==1){
                                                            $temp=$temp+1;
                                                        }
                                                    }
                                                    echo "<td data-th=\"上分次数\">$temp</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_balance_chongzhi);$j++){
                                                        if($db_balance_chongzhi[$j]->bptype == 3){
                                                            $temp=$temp+$db_balance_chongzhi[$j]->bpprice;
                                                        }
                                                    }
                                                    echo "<td data-th=\"手动上分\">$temp</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_balance_xiafen);$j++){
                                                        if($db_balance_xiafen[$j]->bptype ==0 ){
                                                            $temp=$temp+1;
                                                        }
                                                    }
                                                    echo "<td data-th=\"下分审核中\">$temp</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_balance_xiafen);$j++){
                                                        if($db_balance_xiafen[$j]->isverified == 1){
                                                            $temp=$temp+1;
                                                        }
                                                    }
                                                    echo "<td data-th=\"下分次数\">$temp</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_balance_xiafen);$j++){
                                                        if($db_balance_xiafen[$j]->isverified == 1){
                                                            $temp=$temp+$db_balance_xiafen[$j]->bpprice;
                                                        }
                                                    }
                                                    echo "<td data-th=\"下分总额\">$temp</td>";
//                                                        echo "<td data-th=\"佣金\">0</td>-->";
//                                                        echo "<td data-th=\"红利\">0</td>";
                                                    echo "<td data-th=\"当前馀额\">".$db_userinfo->usermoney."</td>";
//                                                        echo "<td data-th=\"实际馀额\">430000</td>";
//                                                        echo "<td data-th=\"净入金\">0</td>";
                                                    $temp=0;
                                                    $Nowtime=strtotime(date("Y-m-d"));
                                                    for($j=0;$j<@count($db_order);$j++){
                                                        if($db_order[$j]->uid == $db_userinfo->uid){
                                                            $order_temp=0;
                                                            if($db_order[$j]->selltime > $Nowtime){
                                                                if($db_order[$j]->is_win == 1){  //贏的抓出來打
                                                                    $order_temp=0-$db_order[$j]->fee;
                                                                }
                                                                if($db_order[$j]->is_win ==2){
                                                                    $order_temp=$db_order[$j]->fee * (($db_order[$j]->endloss)/100);
                                                                    $temp=$order_temp+$temp;
                                                                }
                                                            }
                                                        }
                                                    }

                                                    echo "<td data-th=\"当日盈亏\">$temp</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_order);$j++){
                                                        if($db_order[$j]->uid == $db_userinfo->uid){
                                                            $order_temp=0;

                                                            if($db_order[$j]->is_win == 1){  //贏的抓出來打
                                                                $order_temp=0-$db_order[$j]->fee;
                                                            }
                                                            if($db_order[$j]->is_win ==2){
                                                                $order_temp=$db_order[$j]->fee * (($db_order[$j]->endloss)/100);
                                                                $temp=$order_temp+$temp;
                                                            }

                                                        }
                                                    }
                                                    echo "<td data-th=\"总盈亏\">$temp</td>";
                                                    $temp=0;
                                                    for($j=0;$j<@count($db_order);$j++){
                                                        if($db_order[$j]->uid == $db_userinfo->uid){
                                                            $temp=$temp+$db_order[$j]->sx_fee;
                                                        }
                                                    }
                                                    echo "<td data-th=\"总手续费\">$temp</td>";
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
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
