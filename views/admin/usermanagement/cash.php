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
            <div class="row">
                <div class="col-12">
                    <!-- <button type="button" class="btn btn-danger">搜索全部</button> -->
                    <?php
                    $moneytemp =0;

                    for($j=0;$j<count($db_balance_shiafen);$j++){
                        $moneytemp = $moneytemp+$db_balance_shiafen[$j]->bpprice;
                    }

                    echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/cashbutton'])."><button type=\"button\" class=\"btn btn-danger\">下分总金额： $moneytemp (点此刷新)</button></a>";
                    ?>
                </div>

            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">提现记录</strong>
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
                                                            aria-label="Office: activate to sort column ascending">编号
                                                        </th>
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
                                                            aria-label="Salary: activate to sort column ascending">提现前金额
                                                        </th>

                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">提现时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">下单次数
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">审核时间
                                                        </th>
<!--                                                        <th class="sorting" tabindex="0"-->
<!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                            colspan="1"-->
<!--                                                            aria-label="Salary: activate to sort column ascending">代理商-->
<!--                                                        </th>-->
<!--                                                        <th class="sorting" tabindex="0"-->
<!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                            colspan="1"-->
<!--                                                            aria-label="Salary: activate to sort column ascending">理由-->
<!--                                                        </th>-->
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">提现状态
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                  <?php
                                                  for($i=0;$i<count($db_balance_shiafen);$i++){
                                                    echo "<tr role=\"row\" class=\"odd\">";
                                                    echo "<td data-th=\"编号\">".$db_balance_shiafen[$i]->bpid."</td>";
                                                    $usertemp="";
                                                    for($j=0;$j<count($db_userinfo);$j++){
                                                      if($db_balance_shiafen[$i]->uid == $db_userinfo[$j]->uid){
                                                        $usertemp = $db_userinfo[$j]->username;
                                                      }
                                                    }
//                                                    if($usertemp == ""){
//                                                      $usertemp=$db_balance_shiafen[$i]->uid;
//                                                    }

                                                    echo "<td data-th=\"交易姓名\">".$usertemp."</td>";
                                                    // echo "<td data-th=\"交易姓名\">".$data[$i]->uid."</td>";
                                                    echo "<td data-th=\"申请金额\">".$db_balance_shiafen[$i]->bpprice."</td>";
                                                    echo "<td data-th=\"手续费\">".$db_balance_shiafen[$i]->reg_par."</td>";
                                                    $temp = $db_balance_shiafen[$i]->bpprice-$db_balance_shiafen[$i]->reg_par;
                                                    if($db_balance_shiafen[$i]->isverified == "2"){
                                                        echo "<td data-th=\"到帐金额\" class=\"text-danger\"> </td>";
                                                    }else{
                                                        echo "<td data-th=\"到帐金额\" class=\"text-danger\">".$temp."</td>";
                                                    }

                                                    echo "<td data-th=\"提现前馀额\">".$db_balance_shiafen[$i]->bpbalance."</td>";

                                                    echo "<td data-th=\"提现时间\">".date("Y-m-d",$db_balance_shiafen[$i]->btime)."</td>";
                                                    $totaltemp=0;
                                                    for($j=0;$j<count($db_order);$j++){
                                                        if($db_balance_shiafen[$i]->uid == $db_order[$j]->uid){
                                                            $totaltemp=$totaltemp+1;
                                                        }
                                                    }
                                                    echo "<td data-th=\"下单次数\">$totaltemp</td>";
//                                                      echo "hellｌｌｌｌｌｌｌｌｏ".$data2[$j]->uid;
                                                    if($db_balance_shiafen[$i]->isverified == "2"){
                                                        echo "<td data-th=\"审核时间\"> </td>";
                                                    }else{
                                                        echo "<td data-th=\"审核时间\">".date("Y-m-d",$db_balance_shiafen[$i]->cltime)."</td>";
                                                    }


//                                                    echo "<td data-th=\"代理商\"></td>";
//                                                  if($data[$i]->isverified == "2"){
//                                                      echo "<td data-th=\"理由\"> </td>";
//                                                  }else{
//                                                      echo "<td data-th=\"理由\">".$data[$i]->remarks."</td>";
//                                                  }

                                                    echo "<td data-th=\"提现状态\">";
                                                    if($db_balance_shiafen[$i]->isverified == "0"){
                                                        echo "未通过";
                                                    }elseif($db_balance_shiafen[$i]->isverified == "1"){
                                                        echo "通过";
                                                    }elseif($db_balance_shiafen[$i]->isverified == "2"){
                                                        echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/cashyes'])."&bpid=".$db_balance_shiafen[$i]->bpid.">
                                                      <button type=\"button\" class=\"btn btn-primary\">审核通过</button>";
                                                        echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/cashno2'])."&bpid=".$db_balance_shiafen[$i]->bpid.">
                                                      <button type=\"button\" class=\"btn btn-primary\">未通过</button>";
                                                    }
                                                    echo "</td>
                                                          </tr>";
                                                  }
                                                  ?>













<!--
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
                                                            </a> -->


                                                    <!-- <tr role="row" class="odd">
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
                                                    </tr> -->
                                                    <!-- <tr role="row" class="even">
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
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
