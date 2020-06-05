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

    <?php $form = ActiveForm::begin(['options' => ['id' => 'banks', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>

    <?php
    if($opentemp=="0")
    {
        echo "<div class=\"content mt-3 collapse\" id=\"edit\">";
    }else{
        echo "<div class=\"content mt-3 \" id=\"edit\">";
    }
    ?>

    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12 table_scroll_bar">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">编辑银行卡</strong>
                    </div>
                    <div class="card-body">
                        <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row form-group">
                                        <div class="col col-md-2"><label for="text-input" class=" form-control-label">银行卡名称</label></div>

                                        <div class="col-12 col-md-10">
                                            <?= $form->field($model,'bank_nm')->input('text',['class'=>'form-control','value'=>$data2->bank_nm])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="中国工商银行" class="form-control"> -->
                                        </div>

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
    </div>
</div>





<?php ActiveForm::end(); ?>


<div class="content ">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12 text-right">
                <?php
                  echo "<a href=". yii\helpers\Url::to(['admin/systemsettings/Banksadd'])."><button type=\"button\" class=\"btn btn-danger\">新增銀行卡</button></a>";

                ?>
            </div>
        </div>
    </div>
</div>






</div>
<?php include("footer-js.php"); ?>

</body>

</html>
