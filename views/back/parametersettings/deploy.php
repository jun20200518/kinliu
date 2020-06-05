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
                    <div class="col-lg-6 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    配置列表
                                </span>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table-export"
                                                class="table table-striped table-bordered dataTable no-footer" role="grid"
                                                aria-describedby="bootstrap-data-table-export_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending">
                                                            标题</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">类型
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">创建时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">标示
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">操作
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    参数列表
                                </span>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table-export"
                                                class="table table-striped table-bordered dataTable no-footer" role="grid"
                                                aria-describedby="bootstrap-data-table-export_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending">
                                                            标题</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">类型
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">创建时间
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">标示
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">操作
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="标题">网站名称</td>
                                                        <td data-th="类型">字符</td>
                                                        <td data-th="创建时间">2018-01-22 12:08:24</td>
                                                        <td data-th="标示">web_name</td>
                                                        <td data-th="操作">
                                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
