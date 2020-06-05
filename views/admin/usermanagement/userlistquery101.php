<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
// $ptitle = $data->ptitle;
?>


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
                            <strong class="card-title">代理查询</strong>
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
                                                    aria-label="Name: activate to sort column descending">用户ID
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="bootstrap-data-table-export" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Position: activate to sort column ascending">
                                                    客户信息</th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="bootstrap-data-table-export" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Office: activate to sort column ascending">客户名称
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="bootstrap-data-table-export" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">创见日期
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="bootstrap-data-table-export" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">最近登陆
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="bootstrap-data-table-export" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">订单数
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="bootstrap-data-table-export" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">帐户馀额
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>


                                            <?php

                                            for($i=0;$i<count($db_userinfo_search);$i++)
                                            {
                                                echo "<tr role=\"row\" class=\"odd\">";
                                                echo "<td data-th=\"用户ID\">".$db_userinfo_search[$i]->uid."</td>";
                                                echo "<td data-th=\"客户信息\">".$db_userinfo_search[$i]->username."</td>";
                                                echo "<td data-th=\"客户名称\">".$db_userinfo_search[$i]->nickname."</td>";


                                                echo "<td data-th=\"创建日期\">".date("Y-m-d H:i:s",$db_userinfo_search[$i]->utime)."</td>";


                                                echo "<td data-th=\"最近登陆\">".date("Y-m-d H:i:s",$db_userinfo_search[$i]->lastlog)."</td>";
                                                $ordertemp=0;
                                                for($j=0;$j<count($db_order);$j++){
                                                    if($db_userinfo_search[$i]->uid == $db_order[$j]->uid){
                                                        $ordertemp=$ordertemp+1;
                                                    }
                                                }
                                                echo "<td data-th=\"订单数\">$ordertemp</td>";
                                                echo "<td data-th=\"帐户馀额\" class=\"text-danger\">".$db_userinfo_search[$i]->usermoney."</td>";


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
