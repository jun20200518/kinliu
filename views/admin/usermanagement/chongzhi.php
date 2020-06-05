
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
            <div class="row">
                <div class="col-lg-12">
                  <?php $form = ActiveForm::begin(['options' => ['id' => 'chongzhi', 'method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'form-horizontal']]) ?>
                    <div class="card">
                        <div class="card-header">
                            <strong>充值资料审核</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-lg-6 mar-10">
                                        <div class="input-group">
                                            <span  class="input-group-addon" id="basic-addon1">手机号</span>
                                            <?= $form->field($model,'phoneid')->input('text',['class'=>'form-control','placeholder'=>'请输入用户手机号'])->label(false) ?>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">充值金额</span>
                                            <?= $form->field($model,'addprice')->input('text',['class'=>'form-control','placeholder'=>'请输入充值金额'])->label(false) ?>

                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                          <?= Html::submitButton('提交',['class' => 'btn btn-primary btn-sm']);?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
