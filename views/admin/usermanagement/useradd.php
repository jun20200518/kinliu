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
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">添加用户</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                      <?php $form = ActiveForm::begin(['options' => ['id' => 'useradd', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">手机号</label></div>
                                                        <div class="col-12 col-md-10">
                                                        <?= $form->field($model,'utel')->input('text',['class'=>'form-control'])->label(false) ?>
                                                          </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">真实姓名</label></div>

                                                <div class="col-12 col-md-10">
                                                  <?= $form->field($model,'username')->input('text',['class'=>'form-control'])->label(false) ?>

                                                      </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">密码</label></div>
                                                <div class="col-12 col-md-10">
                                                <?= $form->field($model,'upwd')->input('password',['class'=>'form-control'])->label(false) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="text-input"
                                                        class=" form-control-label">确认密码</label></div>
                                              <div class="col-12 col-md-10">
                                               <?= $form->field($model,'checkupwd')->input('password',['class'=>'form-control'])->label(false) ?>
                                               </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <!-- <button type="submit" class="btn btn-primary btn-sm">
                                    提交
                                </button> -->
                                <?= Html::submitButton('提交',['class' => 'btn btn-primary btn-sm']);?>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
