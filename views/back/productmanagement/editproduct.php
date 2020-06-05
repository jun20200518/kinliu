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
        <div class="content mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>编辑产品</strong>
                    </div>
                    <div class="card-body card-block">
                        <?php $form = ActiveForm::begin(['options' => ['id' => 'editproduct', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']]) ?>
                          <?= $form->field($model,'pid')->hiddenInput(['value'=> $data->pid])->label(false) ?>
                        <!-- <form action="productmanagement/editproduct" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">产品名称</label></div>
                                <div class="col-12 col-md-10">
                                      <?= $form->field($model,'ptitle')->input('text',['class'=>'form-control','value'=> $data->ptitle])->label(false) ?>
                                </div>
                            </div>


                    </div>
                    <div class="card-footer">
                        <?= Html::submitButton('提交',['class' => 'btn btn-primary btn-sm']);?>
                        <!-- <button type="submit"  class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> 提交
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> 清除
                        </button> -->

                    </div>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
