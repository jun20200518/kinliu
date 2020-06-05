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
                                                    <a href="<?php  echo yii\helpers\Url::to(['productmanagement/addproduct']) ?>"><button type="button" class="btn btn-info">添加产品</button></a>
                                                </label>
                                                <!-- <label>
                                                    <input type="search" class="form-control form-control-sm" placeholder="搜寻" aria-controls="bootstrap-data-table-export">
                                                </label> -->
                                            </div>
                                        </div>



                                            <div class="col-sm-12">
                                              <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                  <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">排序
                                                        </th>
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
                                                    for($i=0;$i<count($data);$i++){
                                                      echo "<tr role=\"row\" class=\"odd\">";
                                                      echo "<td data-th=\"排序\" class=\"sorting_1\"><input type=\"text\"
                                                                placeholder=\"".$data[$i]->proorder."\" class=\"form-control\"></td>";
                                                      echo "<td data-th=\"编号\">".$data[$i]->pid."</td>";
                                                      echo "<td data-th=\"商品名称\">".$data[$i]->ptitle."</td>";
                                                      if($data[$i]->isopen =="0"){
                                                        echo "<td data-th=\"状态\">关市</td>";
                                                      }else{
                                                        echo "<td data-th=\"状态\">开市</td>";
                                                      }
                                                      echo "<td data-th=\"所属分类\">虚拟货币</td>";
                                                      echo "<td data-th=\"随机值\">".$data[$i]->rands."</td>";
                                                      echo "<td data-th=\"风控最小值\">".$data[$i]->point_low."</td>";
                                                      echo "<td data-th=\"风控最大值\">".$data[$i]->point_top."</td>";
                                                      echo "<td data-th=\"操作\">";
                                                      // <button type="button" class="btn btn-warning">点击开市</button>
                                                      // echo "<button type=\"button\"
                                                      //     class=\"btn btn-secondary\">点击休市</button>";

                                                      if($data[$i]->isopen=="0")
                                                      {
                                                        echo "<a href=". yii\helpers\Url::to(['productmanagement/off'])."&id=".$data[$i]->pid.">
                                                        <button type=\"button\"
                                                         class=\"btn btn-secondary\">点击休市</button>
                                                        ";
                                                      }else{
                                                        echo "<a href=". yii\helpers\Url::to(['productmanagement/on'])."&id=".$data[$i]->pid.">
                                                        <button type=\"button\" class=\"btn btn-warning\">点击开市</button>
                                                        ";
                                                      }






                                                     echo "<a href=". yii\helpers\Url::to(['productmanagement/editproduct'])."&id=".$data[$i]->pid.">
                                                           <button type=\"button\" class=\"btn btn-primary\"><i
                                                          class=\"fa fa-pencil\"></i></button>
                                                          </a>";

                                                     echo "<a href=". yii\helpers\Url::to(['productmanagement/delete'])."&id=".$data[$i]->isdelete.">
                                                           <button type=\"button\" class=\"btn btn-danger open_window\"><i
                                                                class=\"fa fa-trash-o\" ></i></button></button>
                                                                </a>";




                                                    // echo "<a href=". yii\helpers\Url::to(['productmanagement/editproduct'])."&id=".$data[$i]->pid.">
                                                    //
                                                    // ";
                                                    // echo "<a href=\"echo yii\helpers\Url::to(['productmanagement/editproduct'])\">
                                                    //         <button type=\"button\" class=\"btn btn-primary\"><i
                                                    //                 class=\"fa fa-pencil\"></i></button>
                                                    //       </a>";


                                                    // <a href="editProduct.php">
                                                    //     <button type="button" class="btn btn-primary"><i
                                                    //             class="fa fa-pencil"></i></button>
                                                    // </a>





                                                      // echo "<a href=\"editProduct.php\">
                                                      //         <button type=\"button\" class=\"btn btn-primary\"><i
                                                      //                 class=\"fa fa-pencil\"></i></button>
                                                      //       </a>";
                                                      // echo "<a href=". yii\helpers\Url::to(['productmanagement/delete'])."&id=".$data[$i]->pid.">
                                                      //   "<button type=\"button\" class=\"btn btn-danger open_window\"><i
                                                      //      class=\"fa fa-trash-o\" ></i></button></button>
                                                      //      </a>";
                                                      // // echo "<button type=\"button\" class=\"btn btn-danger\"><i
                                                      // //         class=\"fa fa-trash-o\"></i></button></button>";
                                                      // echo "</td>
                                                      //     </tr>";

                                                      //
                                                      //



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
