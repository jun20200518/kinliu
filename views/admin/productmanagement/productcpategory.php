<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

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
    <?php $form = ActiveForm::begin(['options' => ['id' => 'productcpategorycontrol', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
    <div class="content mt-3 collapse" id="new">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12 table_scroll_bar">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">添加产品类别</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">产品类别名称</label></div>

                                            <?= $form->field($model,'newdata')->input('text',['class'=>'form-control'])->label(false) ?>
                                            <!-- <div class="col-12 col-md-10"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control"></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?= Html::submitButton('提交',['class' => 'btn btn-primary btn-sm']);?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>


    <?php ActiveForm::end(); ?>


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
                                                <a href="#new" data-toggle="collapse">
                                                    <button type="button" class="btn btn-info">添加产品</button>
                                                </a>
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
                                            for($i=0;$i<count($db_productclass_all);$i++)
                                            {
                                                echo "<tr role=\"row\" class=\"odd\">";
                                                echo "<td data-th=\"编号\">".$db_productclass_all[$i]->pcid."</td>";
                                                echo "<td data-th=\"标题\">".$db_productclass_all[$i]->pcname."</td>";
                                                echo "<td data-th=\"操作\">";
                                                echo "<a href=". yii\helpers\Url::to(['admin/productmanagement/productcpategorydelete'])."&pcid=".$db_productclass_all[$i]->pcid.">
                                                      <button type=\"button\" class=\"btn btn-danger\"><i  class=\"fa fa-trash-o\"></i></button></a>";
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
