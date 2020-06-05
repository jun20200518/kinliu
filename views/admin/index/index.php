<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<?php

set_include_path("/data/htdocs/zb/views/");
//echo $db_gg->url;
//echo $db_gg->inclu;
//header("Refresh:5;url=https://www.objkuu.cc/index.php?r=admin%2Findex%2Findex")

?>

<head>
    <?php include("header-title.php"); ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div id="right-panel" class="right-panel">
        <?php include("header.php"); ?>
        <div class="content">
<!--            <div class="col-sm-12">-->
<!--              --><?php
//                echo "<marquee class=\"text-danger fz32\">".$data3->value."</marquee>";
//              ?>
<!--            </div>-->
        </div>
        <div class="content">
            <div class="col-xl-4 col-md-12 fz32 text-dark">
                <?php echo "今日新增用户：".$userinfo_count_utime?>
            </div>
            <div class="col-xl-4 col-md-12 fz32 text-dark">
                总用户：<?php echo "$userinfo_count";   ?>
            </div>
            <?php
                $userinfo_temp=0;
                for($i=0;$i<count($db_userinfo_total);$i++){
                    $userinfo_temp=$userinfo_temp+$db_userinfo_total[$i]->usermoney;
                }

            echo "<div class=\"col-xl-4 col-md-12 fz32 text-dark\">";
                echo "用户总馀额：".$userinfo_temp;
            echo "</div>";
            ?>
        </div>
        <div class="content mt-3">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="p-0 clearfix">
                        <span class="bg-danger p-2 px-5 font-2xl mr-3 float-left text-light">
                            今　日<br>
                            订　单
                        </span>
                        <div class="h5 mb-0 pt-4 text-center"><?php echo "$order_count";   ?></div>
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
                        <div class="h5 mb-0 pt-4 text-center"><?php echo "$order_total_winlose";?></div>
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
                        <div class="h5 mb-0 pt-4 text-center"><?php echo $order_fee_total ?></div>
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
                        <?php
                        $balancetemp=0;
                        for($i=0;$i<count($db_balance_chongzhi);$i++){
                            $balancetemp_chongzhi=0+$balancetemp+$db_balance_chongzhi[$i]->bpprice;
                        }
                        if($db_balance_chongzhi == null){
                            echo "<div class=\"h5 mb-0 pt-4 text-center\">0</div>";

                        }else{
                            echo "<div class=\"h5 mb-0 pt-4 text-center\">$balancetemp_chongzhi</div>";
                        }
                        ?>
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
                        <?php
                            $balancetemp=0;
                            for($i=0;$i<count($db_balance);$i++){
                                $balancetemp=$balancetemp+$db_balance[$i]->bpprice;
                            }

                        echo "<div class=\"h5 mb-0 pt-4 text-center\">$balancetemp</div>";
                        ?>
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
                        <?php
                        $balancetemp=0;
                        for($i=0;$i<count($db_order_txorder);$i++){
                          if($balancetemp+$db_order_txorder[$i]->is_win == "1"){
                            $balancetemp=$balancetemp+$db_order_txorder[$i]->sx_fee;
                          }

                        }

                        echo "<div class=\"h5 mb-0 pt-4 text-center\">$balancetemp</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <?php

            echo "<a href=". yii\helpers\Url::to(['admin/index/indexrefresh'])."><button type=\"button\" class=\"btn btn-success\">点此刷新</button></a>";
            ?>
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">



                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
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
<!--                                                    <th class="sorting" tabindex="0"-->
<!--                                                        aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                        colspan="1"-->
<!--                                                        aria-label="Salary: activate to sort column ascending">-->
<!--                                                        无效委托金额-->
<!--                                                    </th>-->
<!--                                                    <th class="sorting" tabindex="0"-->
<!--                                                        aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                        colspan="1"-->
<!--                                                        aria-label="Salary: activate to sort column ascending">-->
<!--                                                        有效无效委托-->
<!--                                                    </th>-->
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
                                                    <!-- <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">买后盈亏
                                                    </th> -->
                                                    <!--<th class="sorting" tabindex="0"-->
                                                    <!--aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                    <!--colspan="1"-->
                                                    <!--aria-label="Salary: activate to sort column ascending">归属代理商-->
                                                    <!--</th>-->
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="bootstrap-data-table-export" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending">单控操作
                                                    </th>
                                                    <!--<th class="sorting" tabindex="0"-->
                                                    <!--aria-controls="bootstrap-data-table-export" rowspan="1"-->
                                                    <!--colspan="1"-->
                                                    <!--aria-label="Salary: activate to sort column ascending">详情-->
                                                    <!--</th>-->
                                                </tr>
                                                </thead>
                                                <tbody>



                                                <?php
                                                //for($i=0;$i<count($data);$i++)
                                                for($i=0;$i<count($data);$i++)
                                                {
                                                    echo "<tr role=\"row\" class=\"odd\">";
                                                    echo "<td data-th=\"交易帐号\">".$data[$i]->oid."</td>";
                                                    echo "<td data-th=\"用户姓名\">".$data[$i]->username."</td>";
                                                    echo "<td data-th=\"订单时间\">".date('Y-m-d H:i:s', $data[$i]->buytime)."</td>";
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
//                                                    echo "<td data-th=\"无效委托馀额\" class=\"text-danger\"></td>";
//                                                    echo "<td data-th=\"有效委托馀额\" class=\"text-danger\"></td>";
                                                    if($data[$i]->is_win == "" ){
                                                        echo "<td data-th=\"实际盈亏\"> </td>";
                                                    }else{
                                                        if($data[$i]->is_win == 1 ){
                                                            echo "<td data-th=\"实际盈亏\" class=\"text-danger\">".$data[$i]->ploss."</td>";
                                                        }elseif($data[$i]->is_win==2){
                                                            echo "<td data-th=\"实际盈亏\" class=\"text-success\">".$data[$i]->ploss."</td>";
                                                        }
                                                    }
                                                    if($data[$i]->is_win == 1 ){
                                                        echo "<td data-th=\"手续费\">".$data[$i]->sx_fee."</td>";
                                                    }else{
                                                        echo "<td data-th=\"手续费\">0</td>";
                                                    }

                                                    // if($data[$i]->is_win == 1){
                                                    //     echo "<td data-th=\"买后盈亏\" class=\"text-danger\">".$data[$i]->fee."</td>";
                                                    // }elseif($data[$i]->is_win == 2){
                                                    //     echo "<td data-th=\"买后盈亏\" class=\"text-danger\">2</td>";
                                                    // }else{
                                                    //     echo "<td data-th=\"买后盈亏\" class=\"text-danger\">交易中</td>";
                                                    // }


                                                    //echo "<td data-th=\"所属代理商\">10000062</td>";
                                                    echo "<td data-th=\"单控操作\">";
                                                    if($data[$i]->ostaus == 0){
                                                        if($data[$i]->bg_win == 1){
                                                            echo "控单赢";
                                                            echo "<a href=". yii\helpers\Url::to(['admin/index/lose'])."&oid=".$data[$i]->oid."> <button type=\"button\" class=\"fz8 btn btn-success btn-sm\">改控单输</button> </a>";
                                                        }elseif($data[$i]->bg_win == 2){
                                                            echo "控单输";
                                                            echo "<a href=". yii\helpers\Url::to(['admin/index/win'])."&oid=".$data[$i]->oid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">改控单赢</button> </a>";
                                                        }else{
                                                            echo "<a href=". yii\helpers\Url::to(['admin/index/win'])."&oid=".$data[$i]->oid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">赢</button> </a>";
                                                            echo "<a href=". yii\helpers\Url::to(['admin/index/lose'])."&oid=".$data[$i]->oid."> <button type=\"button\" class=\"fz8 btn btn-success btn-sm\">输</button> </a>";
                                                        }
                                                    }else{
                                                        echo "已结单";
                                                    }

                                                    //echo "<tr role=\"row\" class=\"odd\">";
                                                    echo "</td></tr>";


                                                }

                                                ?>

                                                </tbody>
                                            </table>





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
