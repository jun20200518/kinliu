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
                                <strong class="card-title">基本设置</strong>
                            </div>
                            <?php $form = ActiveForm::begin(['options' => ['id' => 'basicsettings', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">

                                      <?php

                                        for ($i=0; $i <count($data) ; $i++) {
                                            if($data[$i]->status == 1) {
                                                echo "<div class=\"col-sm-12\">
                                                        <div class=\"row form-group\">
                                                         <div class=\"col col-md-2\">
                                                         <label for=\"text-input\" class=\" form-control-label\">" . $data[$i]->title . "</label>
                                                        </div>";
                                                echo "<div class=\"col-12 col-md-10\">";
                                                echo $form->field($model, $data[$i]->name)
                                                    ->input('text', ['class' => 'form-control', 'value' => $data[$i]->value])
                                                    ->label(false);
                                                echo "<small class=\"form-text text-muted\">" . $data[$i]->extra . "</small>";

                                                echo "</div></div></div>";
                                            }
                                        }
                                      ?>


                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">

                                <?= Html::submitButton('提交',['class' => 'btn btn-primary btn-sm']);?>
                                <!-- <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> 清除
                                </button> -->
                            </div>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
