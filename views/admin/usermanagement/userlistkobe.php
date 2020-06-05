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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body>
<!--    --><?php
//        if($error!=""){
//            echo "<script>";
//            echo "Swal.fire({
//                  icon: 'error',
//                  title: '$error',
//
//            })";
//            echo "</script>";
//        }
//    ?>
    <?php include("menu.php"); ?>
    <div id="right-panel" class="right-panel">
        <?php include("header.php"); ?>

        <div class="content">
            <div class="row">
                <div class="col-12">
                    <?php
                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/usermanagementallclient'])."><button type=\"button\" class=\"btn btn-primary\">所有客戶</button></a>";
                    ?>

                    <?php
                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/usermanagementoneclient'])."><button type=\"button\" class=\"btn btn-primary\">今日客户</button></a>";
                    ?>
<!--                    --><?php
//                    echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/'])."><button type=\"button\" class=\"btn btn-primary\">上级代理</button></a>";
//                    ?>
<!--                    --><?php
//                    echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/'])."><button type=\"button\" class=\"btn btn-primary\">下级代理</button></a>";
//                    ?>

                    <?php
                        echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/useradd'])."><button type=\"button\" class=\"btn btn-danger\">添加客户+</button></a>";
                        echo " ";
                    ?>


                </div>
            </div>
        </div>
        <div class="content mt-3">
            <?php
            echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/uselistrefresh'])."><button type=\"button\" class=\"btn btn-success\">点此刷新</button></a>";
            ?>
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">客户列表</strong>
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
                                                            客户帐号</th>
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

                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">身份
                                                        </th>
<!--                                                        <th class="sorting" tabindex="0"-->
<!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                            colspan="1"-->
<!--                                                            aria-label="Salary: activate to sort column ascending">红利-->
<!--                                                        </th>-->
<!--                                                        <th class="sorting" tabindex="0"-->
<!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                            colspan="1"-->
<!--                                                            aria-label="Salary: activate to sort column ascending">佣金-->
<!--                                                        </th>-->
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">归属代理商
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">邀請碼
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">信用评分
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">离线控单
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
                                                    for($i=0;$i<count($userinfo);$i++){
                                                        echo "<tr role=\"row\" class=\"odd\">";


                                                        echo "<td data-th=\"操作\">";
                                                        echo "<td data-th=\"客户帐号\">".$userinfo[$i]->utel."</td>";

                                                        echo "</td>";
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
