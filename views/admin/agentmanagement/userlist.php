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
        <!-- <div class="content mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>客戶列表</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-lg-4 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">类型</span>
                                            <select name="ostyle" id="" class="selectpicker show-tick form-control">
                                                <option value="">默認不選</option>
                                                <option value="1">客户</option>
                                                <option value="2">代理</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">用户名</span>
                                            <input type="text" name="orderid" class="form-control" value=""
                                                placeholder="暱稱/姓名/手機號/編號">
                                        </div>
                                    </div>
                                    <div class="col-lg-1 mar-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            搜索
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="content">
            <div class="row">
                <div class="col-12">

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'all', 'method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'btn btn-primary']]) ?>
                    <?= Html::submitButton('所有用户',['class' => 'btn btn-primary btn-sm']);?>
                    <?php ActiveForm::end(); ?>

                    <?php $form = ActiveForm::begin(['options' => ['id' => 'allclient', 'method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'btn btn-info']]) ?>
                    <?= Html::submitButton('所有客户',['class' => 'btn btn-info']);?>
                    <?php ActiveForm::end(); ?>




                    <a href="<?php echo yii\helpers\Url::to(['admin/agentmanagement/allagent']) ?>" class="btn btn-info">
                        <samp>所有代理商</samp>
                    </a>

                    <a href="<?php echo yii\helpers\Url::to(['admin/agentmanagement/userlist']) ?>" class="btn btn-info">
                        <samp>今日客户</samp>
                    </a>

                    <a href="<?php echo yii\helpers\Url::to(['admin/agentmanagement/userlist']) ?>" class="btn btn-info">
                        <samp>今日代理商</samp>
                    </a>




                    <a href="useradd.php"><button type="button" class="btn btn-danger">添加客户+</button></a>
                    <a href="vipuseradd.php"><button type="button" class="btn btn-danger">添加代理+</button></a>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">平仓记录</strong>
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

                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">身份
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">红利
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">佣金
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">归属代理商
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

                                                    for($i=0;$i<count($data);$i++)
                                                    {
                                                      echo "<tr role=\"row\" class=\"odd\">";
                                                        echo "<td data-th=\"用户ID\">".$data[$i]->uid."</td>";
                                                        echo "<td data-th=\"客户信息\">".$data[$i]->username."</td>";
                                                        echo "<td data-th=\"客户名称\">".$data[$i]->nickname."</td>";
                                                        echo "<td data-th=\"创建日期\">".date("Y-m-d H:i:s",$data[$i]->utime)."</td>";
                                                        echo "<td data-th=\"最近登陆\">".date("Y-m-d H:i:s",$data[$i]->lastlog)."</td>";
                                                        echo "<td data-th=\"订单数\">".$data2[$i]."</td>";
                                                        echo "<td data-th=\"帐户馀额\" class=\"text-danger\">".$data[$i]->usermoney."</td>";
                                                        echo "<td data-th=\"身份\">"."代理商"."</td>";
                                                        echo "<td data-th=\"红利\">0%</td>";
                                                        echo "<td data-th=\"佣金\">0%</td>";
                                                        echo "<td data-th=\"归属代理商\"><a href=\"\">".$data[$i]->managername."</a></td>";
                                                        echo "<td data-th=\"操作\">";
                                                        echo "<button type=\"button\"
                                                            class=\"fz8 btn btn-danger btn-sm\">禁用</button>";
                                                        echo "<button type=\"button\"
                                                            class=\"fz8 btn btn-success btn-sm\">下級客戶</button>";
                                                        echo "<button type=\"button\"
                                                            class=\"fz8 btn btn-success btn-sm\">下級代理</button>";
                                                        echo "<button type=\"button\"
                                                            class=\"fz8 btn btn-primary btn-sm\">業績</button>";
                                                        echo "<button type=\"button\"
                                                            class=\"fz8 btn btn-primary btn-sm\">查看</button>";
                                                        echo "<button type=\"button\"
                                                            class=\"fz8 btn btn-primary btn-sm\">資金報表</button>";
                                                        echo "<button type=\"button\"
                                                            class=\"fz8 btn btn-primary btn-sm\">交易流水</button>";
                                                        echo "</td>";
                                                      echo "</tr>";
                                                    }

                                                  ?>

                                                  <!-- <tr role="row" class="odd">
                                                      <td data-th="用户ID">126</td>
                                                      <td data-th="客户信息">10000126【1315852】</td>
                                                      <td data-th="客户名称">王亚</td>
                                                      <td data-th="创建日期">2019-07-14 10:57:08</td>
                                                      <td data-th="最近登陆">2019-07-14 20:03:30</td>
                                                      <td data-th="订单数">0</td>
                                                      <td data-th="帐户馀额" class="text-danger">￥70000.00</td>
                                                      <td data-th="身份">客戶</td>
                                                      <td data-th="红利">0%</td>
                                                      <td data-th="佣金">0%</td>
                                                      <td data-th="归属代理商"><a href="">a47ra4</a></td>
                                                      <td data-th="操作">
                                                          <button type="button"
                                                              class="fz8 btn btn-danger btn-sm">禁用</button>
                                                          <button type="button"
                                                              class="fz8 btn btn-success btn-sm">成为代理商</button>
                                                          <button type="button"
                                                              class="fz8 btn btn-primary btn-sm">查看</button>
                                                          <button type="button"
                                                              class="fz8 btn btn-primary btn-sm">资金报表</button>
                                                          <button type="button"
                                                              class="fz8 btn btn-primary btn-sm">交易流水</button>
                                                      </td>
                                                  </tr> -->

                                                    <!-- <tr role="row" class="even">
                                                        <td data-th="用户ID">126</td>
                                                        <td data-th="客户信息">10000126【1315852】</td>
                                                        <td data-th="客户名称">王亚</td>
                                                        <td data-th="创建日期">2019-07-14 10:57:08</td>
                                                        <td data-th="最近登陆">2019-07-14 20:03:30</td>
                                                        <td data-th="订单数">0</td>
                                                        <td data-th="帐户馀额" class="text-danger">￥0</td>
                                                        <td data-th="身份">客戶</td>
                                                        <td data-th="红利">0%</td>
                                                        <td data-th="佣金">0%</td>
                                                        <td data-th="归属代理商"><a href="">a47ra4</a></td>
                                                        <td data-th="操作">
                                                            <button type="button"
                                                                class="fz8 btn btn-danger btn-sm">禁用</button>
                                                            <button type="button"
                                                                class="fz8 btn btn-primary btn-sm">下级客户</button>
                                                            <button type="button"
                                                                class="fz8 btn btn-primary btn-sm">下级代理</button>
                                                            <button type="button"
                                                                class="fz8 btn btn-primary btn-sm">业绩</button>
                                                            <button type="button"
                                                                class="fz8 btn btn-primary btn-sm">查看</button>
                                                            <button type="button"
                                                                class="fz8 btn btn-primary btn-sm">资金报表</button>
                                                            <button type="button"
                                                                class="fz8 btn btn-primary btn-sm">交易流水</button>
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
