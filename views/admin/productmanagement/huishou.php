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
                                <strong class="card-title">产品回收站</strong>
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
                                                  for($i=0;$i<count($data);$i++)
                                                  {
                                                    echo "<tr role=\"row\" class=\"odd\">";
                                                    echo "<td data-th=\"编号\">".$data[$i]->pid."</td>";
                                                    echo "<td data-th=\"商品名称\">".$data[$i]->ptitle."</td>";
                                                    if($data[$i]->isopen =="0"){
                                                      echo "<td data-th=\"状态\">关市</td>";
                                                    }else{
                                                      echo "<td data-th=\"状态\">开市</td>";
                                                    }
                                                    // echo "<td data-th=\"状态\">".$data[$i]->ptitle."</td>";
                                                    // echo "<td data-th=\"所属分类\">\"外匯\"</td>";
                                                    for($q=0;$q<count($data2);$q++)
                                                    {
                                                      if($data[$i]->cid == $data2[$q]->pcid)
                                                      {
                                                        echo "<td data-th=\"所属分类\">".$data2[$q]->pcname."</td>";
                                                      }
                                                    }
                                                    echo "<td data-th=\"随机值\">".$data[$i]->rands."</td>";
                                                    echo "<td data-th=\"风控最小值\">".$data[$i]->point_low."</td>";
                                                    echo "<td data-th=\"风控最大值\">".$data[$i]->point_top."</td>";
                                                    // echo "<td data-th=\"操作\">
                                                    //     <button type=\"button\" class=\"btn btn-warning\">点击还原</button>
                                                    // </td>";


                                                    echo "<td data-th=\"操作\">";
                                                    // <a href=". yii\helpers\Url::to(['productmanagement/updata'])."&id=".$data[$i]->isdelete.">
                                                    //     <button type=\"button\" class=\"btn btn-warning\">点击还原</button>
                                                    // </td>";


                                                    echo "<a href=". yii\helpers\Url::to(['admin/productmanagement/updata'])."&id=".$data[$i]->pid.">
                                                    <button type=\"button\" class=\"btn btn-warning\">点击还原</button>
                                                    </a></td> ";

                                                    // echo "<a href=". yii\helpers\Url::to(['productmanagement/delete'])."&id=".$data[$i]->pid.">
                                                    //       <button type=\"button\" class=\"btn btn-danger\"><i
                                                    //      class=\"fa fa-trash-o\"></i></button></button>
                                                    //      </a>";





                                                  }

                                                  ?>


                                                    <!-- <tr role="row" class="odd">
                                                        <td data-th="编号">35</td>
                                                        <td data-th="商品名称">比特币</td>
                                                        <td data-th="状态">开市</td>
                                                        <td data-th="所属分类">外汇</td>
                                                        <td data-th="随机值">0.018</td>
                                                        <td data-th="风控最小值">0.001</td>
                                                        <td data-th="风控最大值">0.0020</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-warning">点击还原</button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="编号">35</td>
                                                        <td data-th="商品名称">比特币</td>
                                                        <td data-th="状态">开市</td>
                                                        <td data-th="所属分类">外汇</td>
                                                        <td data-th="随机值">0.018</td>
                                                        <td data-th="风控最小值">0.001</td>
                                                        <td data-th="风控最大值">0.0020</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-warning">点击还原</button>
                                                        </td>
                                                    </tr> -->
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
