<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
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
                            <strong class="card-title">银行卡修改</strong>
                        </div>
                        <?php $form = ActiveForm::begin(['options' => ['id' => 'userlistmodifycard', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
                        <div class="card-body">
                            <div id="bootstrap-data-table-export_wrapper"
                                 class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="text-input" class=" form-control-label">银行名称：</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <?php
                                                    $model->bankno=$db_banks->bank_no;
                                                    echo $form->field($model, 'bankno')->dropDownList(ArrayHelper::map($bankslist,'bank_no','bank_nm'))->label(false);
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="text-input"class=" form-control-label">省份：</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <?=
//                                                    $model->id=$db_city->city;
                                                     $form->field($model, 'city')
                                                    ->dropDownList(ArrayHelper::map($citylist,'city_nm','city_nm'))
                                                    ->label(false);
                                                ?>
                                                <small class="form-text text-muted">目前所填写省份：<?php echo $db_bankcard->city  ?></small>
<!--                                                <input type="text" id="text-input" name="text-input" value="澳汇金融" class="form-control">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="text-input"  class=" form-control-label">市名：</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <?php
                                                echo $form->field($model, 'address')
                                                    ->input('text', ['class' => 'form-control', 'value' => $db_bankcard->address])
                                                    ->label(false);
                                                ?>
<!--                                                <input type="text" id="text-input"  name="text-input" value="1" class="form-control">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="text-input"  class=" form-control-label">支行：</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <?php
                                                echo $form->field($model, 'branch')
                                                    ->input('text', ['class' => 'form-control', 'value' => $db_bankcard->branch])
                                                    ->label(false);
                                                ?>
<!--                                                <input type="text" id="text-input"  name="text-input" value="1" class="form-control">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="text-input"  class=" form-control-label">开户名：</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <?php
                                                echo $form->field($model, 'accntnm')
                                                    ->input('text', ['class' => 'form-control', 'value' => $db_bankcard->accntnm])
                                                    ->label(false);
                                                ?>
<!--                                                <input type="text" id="text-input"  name="text-input" value="1" class="form-control">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="text-input"  class=" form-control-label">卡号：</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <?php
                                                echo $form->field($model, 'accntno')
                                                    ->input('text', ['class' => 'form-control', 'value' => $db_bankcard->accntno])
                                                    ->label(false);
                                                ?>
<!--                                                <input type="text" id="text-input"  name="text-input" value="1" class="form-control">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="text-input"  class=" form-control-label">身分证号：</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <?php
                                                echo $form->field($model, 'phone')
                                                    ->input('text', ['class' => 'form-control', 'value' => $db_bankcard->phone])
                                                    ->label(false);
                                                ?>
                                                <!--                                                <input type="text" id="text-input"  name="text-input" value="1" class="form-control">-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
<!--                            <button type="submit" class="btn btn-primary btn-sm">-->
<!--                                提交-->
<!--                            </button>-->
                            <?= Html::submitButton('提交',['class' => 'btn btn-primary btn-sm']);?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
</div>
<?php include("footer-js.php"); ?>

<script>
  document.getElementById("bankno").value = <?=$db_bankcard->bankno?>;
</script>
</body>

</html>
