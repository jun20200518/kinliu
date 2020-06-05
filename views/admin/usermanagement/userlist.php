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

                                                  for($i=0;$i<@count($db_userinfo);$i++)
                                                  {
                                                    echo "<tr role=\"row\" class=\"odd\">";
                                                      echo "<td data-th=\"用户ID\">".$db_userinfo[$i]->uid."</td>";
                                                      echo "<td data-th=\"客户帐号\">".$db_userinfo[$i]->utel."</td>";
                                                      echo "<td data-th=\"客户名称\">".$db_userinfo[$i]->nickname."</td>";

//                                                      if($datatemp =="4"){
//                                                        echo "<td data-th=\"创建日期\">".date("Y-m-d H:i:s",$db_userinfo[$i]->utime)."</td>";
//                                                      }elseif($datatemp =="5"){
//                                                        echo "<td data-th=\"创建日期\">".date("Y-m-d H:i:s",$db_userinfo[$i]->utime)."</td>";
//                                                      }else{
//                                                        echo "<td data-th=\"创建日期\">".date("Y-m-d H:i:s",$db_userinfo[$i]->utime)."</td>";
//                                                      }
                                                      echo "<td data-th=\"创建日期\">".date("Y-m-d H:i:s",$db_userinfo[$i]->utime)."</td>";

                                                      echo "<td data-th=\"最近登陆\">".date("Y-m-d H:i:s",$db_userinfo[$i]->lastlog)."</td>";
                                                      $ordertemp=0;
                                                      for($j=0;$j<@count($db_order);$j++){
                                                          if($db_userinfo[$i]->uid == $db_order[$j]->uid){
                                                              $ordertemp=$ordertemp+1;
                                                          }
                                                      }

                                                      echo "<td data-th=\"订单数\">$ordertemp</td>";
                                                      echo "<td data-th=\"帐户馀额\" class=\"text-danger\">".$db_userinfo[$i]->usermoney."</td>";

                                                      if($db_userinfo[$i]->otype=="101") {
                                                        echo "<td data-th=\"身份\">"."代理商"."</td>";
                                                      }elseif ($db_userinfo[$i]->otype=="0") {
                                                        echo "<td data-th=\"身份\">"."普通会员"."</td>";
                                                      }elseif ($db_userinfo[$i]->otype=="3"){
                                                        echo "<td data-th=\"身份\">"."超级管理员"."</td>";
                                                      }
//                                                      echo "<td data-th=\"归属代理商\">";
//                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/'])."&uid=".$data[$i]->uid.">".$data[$i]->managername."</a>";
//                                                      echo "</td>";
                                                      echo "<td data-th=\"归属代理商\">".$db_userinfo[$i]->managername."</td>";
                                                      if($db_userinfo[$i]->otype ==101){
                                                          echo "<td data-th=\"邀请码\">".$db_userinfo[$i]->uid."</td>";
                                                      }else{
                                                          echo "<td data-th=\"邀请码\"></td>";
                                                      }
                                                      echo "<td data-th=\"信用评分\">".$db_userinfo[$i]->fraction."</td>";
                                                      if($db_userinfo[$i]->auto_lose == 1){
                                                          echo "<td data-th=\"离线控单关\">"."开启"."</td>";
                                                      }elseif ($db_userinfo[$i]->auto_lose == 0){
                                                          echo "<td data-th=\"离线控单关\">"."关闭"."</td>";
                                                      }

                                                      echo "<td data-th=\"操作\">";
                                                      //偵測
                                                      if($db_userinfo[$i]->otype == 0){
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistset101'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-warning btn-sm\">设为代理</button> </a>";
                                                      }

                                                      if($db_userinfo[$i]->ustatus ==0){
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistdisable'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">禁用</button> </a>";
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/updatelistdisable2'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">冻结</button> </a>";
                                                      }elseif($db_userinfo[$i]->ustatus ==1){
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistenable'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-success btn-sm\">启用</button> </a>";
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/updatelistdisable2'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">冻结</button> </a>";
                                                      }elseif($db_userinfo[$i]->ustatus==2){
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistdisable'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">禁用</button> </a>";
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistenable'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-success btn-sm\">启用</button> </a>";
                                                      }
                                                      if($db_userinfo[$i]->otype == 101){
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistquery101'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-warning btn-sm\">查看下級</button> </a>";
                                                      }
                                                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistfunds'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">资金报表</button> </a>"; //transaction 交易
                                                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlisttransaction'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">交易流水</button> </a>";
                                                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistxiafen'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">手动下分</button> </a>";
                                                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/userlistmodifycard'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">修改银行卡</button> </a>";
                                                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/updatename'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">修改名称</button> </a>";
                                                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/updatefraction'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-primary btn-sm\">修改信用评分</button> </a>";

                                                      if($db_userinfo[$i]->auto_lose == 1){
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/autoloseclose'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-success btn-sm\">离线控单</button> </a>";
                                                      }elseif ($db_userinfo[$i]->auto_lose == 0){
                                                          echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/autoloseopen'])."&uid=".$db_userinfo[$i]->uid."> <button type=\"button\" class=\"fz8 btn btn-danger btn-sm\">离线控单</button> </a>";
                                                      }

//                                                      echo "<a href=". yii\helpers\Url::to(['admin/usermanagement/cashyes'])."&bpid=".$data[$i]->bpid."> <button type=\"button\" class=\"btn btn-primary\">审核通过</button>";
//                                                      echo "<button type=\"button\"
//                                                          class=\"fz8 btn btn-success btn-sm\">下級客戶</button>";
//                                                      echo "<button type=\"button\"
//                                                          class=\"fz8 btn btn-success btn-sm\">下級代理</button>";
//                                                      echo "<button type=\"button\"
//                                                          class=\"fz8 btn btn-primary btn-sm\">業績</button>";
//                                                      echo "<button type=\"button\"
//                                                          class=\"fz8 btn btn-primary btn-sm\">查看</button>";

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
