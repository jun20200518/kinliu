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

<body onload="onload()">
    <?php include("menu.php"); ?>
    <div id="right-panel" class="right-panel">
        <?php include("header.php"); ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">产品列表</strong>

                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="bootstrap-data-table-export_filter"
                                                class="dataTables_filter text-right">
                                                <label>
                                                    <a href="<?php  echo yii\helpers\Url::to(['admin/productmanagement/addproduct']) ?>"><button type="button" class="btn btn-info">添加产品</button></a>
                                                </label>
                                            </div>
                                        </div>



                                            <div class="col-sm-12">
                                              <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
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
                                                            aria-label="Salary: activate to sort column ascending">商品名称
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            状态（大盘正常开是时间内）
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">所属分类
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">随机值
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">风控最小值
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">风控最大值
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
                                                    for($i=0;$i<count($db_productinfo_all);$i++){
                                                      echo "<tr role=\"row\" class=\"odd\">";
                                                      echo "<td data-th=\"编号\">".$db_productinfo_all[$i]->pid."</td>";
                                                      echo "<td data-th=\"商品名称\">".$db_productinfo_all[$i]->ptitle."</td>";
                                                      if($db_productinfo_all[$i]->isopen =="0"){
                                                        echo "<td data-th=\"状态\">关市</td>";
                                                      }else{
                                                        echo "<td data-th=\"状态\">开市</td>";
                                                      }

                                                      for($q=0;$q<count($db_productinfo_one);$q++)
                                                      {
                                                        if($db_productinfo_all[$i]->cid == $db_productinfo_one[$q]->pcid)
                                                        {
                                                          echo "<td data-th=\"所属分类\">".$db_productinfo_one[$q]->pcname."</td>";
                                                        }
                                                      }
                                                      echo "<td data-th=\"随机值\">".$db_productinfo_all[$i]->rands."</td>";
                                                      echo "<td data-th=\"风控最小值\">".$db_productinfo_all[$i]->point_low."</td>";
                                                      echo "<td data-th=\"风控最大值\">".$db_productinfo_all[$i]->point_top."</td>";
                                                      echo "<td data-th=\"操作\">";
                                                      if($db_productinfo_all[$i]->isopen=="0")
                                                      {
                                                        echo "<a href=". yii\helpers\Url::to(['admin/productmanagement/on'])."&id=".$db_productinfo_all[$i]->pid."><button type=\"button\" class=\"btn btn-warning\">点击开市</button>";
                                                      }else{
                                                        echo "<a href=". yii\helpers\Url::to(['admin/productmanagement/off'])."&id=".$db_productinfo_all[$i]->pid.">
                                                        <button type=\"button\"
                                                         class=\"btn btn-secondary\">点击休市</button>
                                                        ";
                                                      }

                                                     echo "<a href=". yii\helpers\Url::to(['admin/productmanagement/editproductform'])."&id=".$db_productinfo_all[$i]->pid.">
                                                           <button type=\"button\" class=\"btn btn-primary\"><i
                                                          class=\"fa fa-pencil\"></i></button>
                                                          </a>";

                                                     echo "<a href=". yii\helpers\Url::to(['admin/productmanagement/delete'])."&id=".$db_productinfo_all[$i]->pid.">
                                                           <button type=\"button\" class=\"btn btn-danger open_window\"><i
                                                                class=\"fa fa-trash-o\" ></i></button></button>
                                                                </a>";
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
