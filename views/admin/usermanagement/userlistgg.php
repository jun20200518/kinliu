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
                                                        echo "<td data-th=\"用戶ID\">".$userinfo[$i]->uid."</td>";
                                                        echo "<td data-th=\"客户帐号\">".$userinfo[$i]->utel."</td>";
                                                        echo "<td data-th=\"客户名稱\">".$userinfo[$i]->username."</td>";
                                                        echo "<td data-th=\"創建日期\">".$userinfo[$i]->utime."</td>";
                                                        echo "<td data-th=\"最近登入\">".$userinfo[$i]->lastlog."</td>";
                                                        $ordertemp=0;
                                                        for($j=0;$j<count($order);$j++){
                                                            if($userinfo[$i]->uid == $order[$j]->uid){
                                                                $ordertemp=$ordertemp+1;
                                                            }
                                                        }
                                                        echo "<td data-th=\"訂單數\">".$ordertemp."</td>";
                                                        echo "<td data-th=\"帳戶餘額\">".$userinfo[$i]->usermoney."</td>";

                                                        if($userinfo[$i]->otype==0){
                                                            echo "<td data-th=\"身份\">"."普通會員"."</td>";
                                                        }elseif($userinfo[$i]->otype==3){
                                                            echo "<td data-th=\"身份\">"."超級管理員"."</td>";
                                                        }elseif ($userinfo[$i]->otype==101){
                                                            echo "<td data-th=\"身份\">"."代理商"."</td>";
                                                        }
                                                        if($userinfo[$i]->otype==0){
                                                            echo "<td data-th=\"歸屬代理商\">".$userinfo[$i]->managername."</td>";
                                                        }else{
                                                            echo "<td></td>";

                                                        }
                                                        if($userinfo[$i]->otype==101){
                                                            echo "<td data-th=\"邀請碼\">".$userinfo[$i]->uid."</td>";
                                                        }else{
                                                            echo "<td></td>";
                                                        }

                                                        echo "<td data-th=\"信用評分\">".$userinfo[$i]->fraction."</td>";
                                                        //echo "<td data-th=\"用戶ID\">".$userinfo[$i]->uid."</td>";

                                                        if($userinfo[$i]->auto_lose==1){
                                                            echo "<td data-th=\"離線控單\">"."開啟"."</td>";
                                                        }elseif($userinfo[$i]->auto_lose==0){
                                                            echo "<td data-th=\"離線控單\">"."關閉"."</td>";
                                                        }
                                                        echo "<td data-th=\"操作\">";
                                                            if($userinfo[$i]->otype==0){
                                                                echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggset'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-warning btn-sm\">设为代理</button> </a>";
                                                            }
                                                            if($userinfo[$i]->otype==101){
                                                                echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggez'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-warning btn-sm\">查看下線</button> </a>";

                                                            }
                                                            if($userinfo[$i]->ustatus==1){
                                                                echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggcl'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">禁用</button> </a>";
                                                            }else{
                                                                echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggop'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-success btn-sm\">開啟</button> </a>";
                                                            }
                                                            if($userinfo[$i]->errstatus==1){
                                                                echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggno'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">凍結</button> </a>";
                                                            }else{
                                                                echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggyes'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-success btn-sm\">解除</button> </a>";
                                                            }
                                                            echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggfunds'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">资金报表</button> </a>"; //transaction 交易
                                                            echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggtransaction'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">交易流水</button> </a>"; //transaction 交易
                                                            echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggxia'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">手動下分</button> </a>";
                                                            echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggname'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">修改名稱</button> </a>";
                                                            echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggxin'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">修改信用評分</button> </a>";
                                                            echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggcard'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">修改银行卡</button> </a>";

                                                        // echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/ggez'])."&uid=".$userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-warning btn-sm\">查看下級</button> </a>";
                                                        echo "</td>";
                                                        //  echo "<td data-th=\"操作\">";




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
