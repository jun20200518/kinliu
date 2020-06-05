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

                    for($j=0;$j<count($db_balance_shangfen);$j++){
                        $moneytemp = $moneytemp+$db_balance_shangfen[$j]->bpprice;
                    }
                    echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userpricebutton'])."><button type=\"button\" class=\"btn btn-danger\">充值总金额： $moneytemp (点此刷新)</button></a>";

//                    echo "<button type=\"button\" class=\"btn btn-danger\">充值总金额： $moneytemp</button>";
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
                                <strong class="card-title">充值记录</strong>
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
                                                            aria-label="Name: activate to sort column descending">编号
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">交易姓名
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">操作时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">金额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            会员帐号馀额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">备注
                                                        </th>

                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">审核时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">审核/状态
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <?php
                                                    for($i=0;$i<count($db_balance_shangfen);$i++)
                                                    {
                                                      echo "<tr role=\"row\" class=\"odd\">";
                                                      echo "<td data-th=\"编号\">".$db_balance_shangfen[$i]->bpid."</td>";

                                                      //测试
                                                      $usertemp="";
                                                      for($j=0;$j<count($db_userinfo);$j++){
                                                        if($db_balance_shangfen[$i]->uid == $db_userinfo[$j]->uid){
                                                          $usertemp = $db_userinfo[$j]->username;
                                                        }
                                                      }
                                                      if($usertemp == ""){
                                                        $usertemp=$db_balance_shangfen[$i]->uid;
                                                      }
                                                      echo "<td data-th=\"交易姓名\">".$usertemp."</td>";
                                                      // echo ""
                                                      // echo "<td data-th=\"交易姓名\">".$data[$i]->uid."</td>";
                                                      echo "<td data-th=\"操作时间\">".date("Y-m-d",$db_balance_shangfen[$i]->bptime)."</td>";
                                                      echo "<td data-th=\"金额\" class=\"text-danger\">".$db_balance_shangfen[$i]->bpprice."</td>";
                                                      echo "<td data-th=\"会员帐户馀额\" class=\"text-danger\">".$db_balance_shangfen[$i]->bpbalance."</td>";
                                                      echo "<td data-th=\"备注\">".$db_balance_shangfen[$i]->remarks."</td>";
                                                      if($db_balance_shangfen[$i]->isverified =="2"){
                                                          echo "<td data-th=\"审核时间\"></td>";
                                                      }else{
                                                          echo "<td data-th=\"审核时间\">".date("Y-m-d",$db_balance_shangfen[$i]->cltime)."</td>";
                                                      }
                                                      if($db_balance_shangfen[$i]->isverified == "0"){
                                                        echo "<td data-th=\"审核/状态\">未通过</td>";
                                                      }elseif ($db_balance_shangfen[$i]->isverified =="1") {
                                                        echo "<td data-th=\"审核/状态\">通过</td>";
                                                      }elseif($db_balance_shangfen[$i]->isverified =="2"){
                                                        echo "<td data-th=\"审核/状态\">";
                                                        echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/addmoney'])."&bpid=".$db_balance_shangfen[$i]->bpid.">
                                                        <button type=\"button\"
                                                         class=\"btn btn-primary\">上分</button>";
                                                        echo " ";
                                                        echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ignoremoney'])."&bpid=".$db_balance_shangfen[$i]->bpid.">
                                                        <button type=\"button\"
                                                         class=\"btn btn-primary\">忽略</button>";
                                                        echo "</td>";
                                                      }
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
