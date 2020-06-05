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
                                <strong class="card-title">产品分类</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="bootstrap-data-table-export_filter"
                                                class="dataTables_filter text-right">
                                                <label>
                                                    <button type="button" class="btn btn-info">添加产品</button>
                                                </label>
                                            </div>
                                        </div>
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
                                                            aria-label="Office: activate to sort column ascending">标题
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
                                                    echo "<td data-th=\"标题\">".$data[$i]->pcname."</td>";
                                                    echo "<td data-th=\"编号\">".$data[$i]->pcid."</td>";
                                                    echo "<td data-th=\"操作\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><i
                                                                class=\"fa fa-pencil\"></i></button>
                                                        <button type=\"button\" class=\"btn btn-danger\"><i
                                                                class=\"fa fa-trash-o\"></i></button></button>
                                                    </td>";
                                                    }
                                                  ?>


                                                    <!-- <tr role="row" class="odd">
                                                        <td data-th="编号">5</td>
                                                        <td data-th="标题">外汇</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger"><i
                                                                    class="fa fa-trash-o"></i></button></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="编号">5</td>
                                                        <td data-th="标题">外汇</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger"><i
                                                                    class="fa fa-trash-o"></i></button></button>
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
                                    <!-- <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>编辑名稱</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                    <form action="" method="post" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input"
                                                                    class=" form-control-label">分类名称</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="text-input"
                                                                    placeholder="请输入分类名称" class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> 确认
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> 清除
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>添加名稱</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                    <form action="" method="post" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input"
                                                                    class=" form-control-label">分类名称</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="text-input"
                                                                    placeholder="请输入分类名称" class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> 添加
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> 清除
                                                    </button>
                                                </div>
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
