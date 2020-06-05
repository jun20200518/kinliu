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
                                        <div class="col-sm-12 text-center">
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
                                                  <?php
                                                  //參數列專用

                                                  for($i=0;$i<count($data);$i++){
                                                    echo "<tr role=\"row\" class=\"odd\">";
                                                    echo "<td data-th=\"标题\">".$data[$i]->title."</td>";
                                                    echo "<td data-th=\"标示\">".$data[$i]->name."</td>";
                                                    echo "<td data-th=\"操作\">";
                                                    if($data[$i]->status=="0")
                                                    {
                                                      echo "<a href=". yii\helpers\Url::to(['admin/parametersettings/deployon'])."&id=".$data[$i]->id.">
                                                            <button type=\"button\" class=\"btn btn-warning\">点击开启</button>";

                                                    }else{
                                                      echo "<a href=". yii\helpers\Url::to(['admin/parametersettings/deployoff'])."&id=".$data[$i]->id.">
                                                            <button type=\"button\" class=\"btn btn-secondary\">点击关闭</button>";
                                                    }
                                                    // echo "<button type=\"button\" class=\"btn btn-warning\">点击开市</button>";
                                                    echo "</td>
                                                    </tr>";
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
                                        <div class="col-sm-12 text-center">
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
                                                  <?php
                                                  //參數列專用
                                                  for($i=0;$i<count($data2);$i++){
                                                    echo "<tr role=\"row\" class=\"odd\">";
                                                    echo "<td data-th=\"标题\">".$data2[$i]->title."</td>";
                                                    echo "<td data-th=\"标示\">".$data2[$i]->name."</td>";
                                                    echo "<td data-th=\"操作\">";
                                                    if($data2[$i]->status=="0")
                                                    {
                                                      echo "<a href=". yii\helpers\Url::to(['admin/parametersettings/deployon'])."&id=".$data2[$i]->id.">
                                                            <button type=\"button\" class=\"btn btn-warning\">点击关闭</button>";

                                                    }else{
                                                      echo "<a href=". yii\helpers\Url::to(['admin/parametersettings/deployoff'])."&id=".$data2[$i]->id.">
                                                            <button type=\"button\" class=\"btn btn-secondary\">点击开启</button>";
                                                    }
                                                    // echo "<button type=\"button\" class=\"btn btn-warning\">点击开市</button>";
                                                    echo "</td>
                                                    </tr>";
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
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
