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
                                                    <?= $form->field($model,'bank_nm')->input('text',['class'=>'form-control'])->label(false) ?>
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
                            echo "<a href=". yii\helpers\Url::to(['admin/systemsettings/banksadd'])."><button type=\"button\" class=\"btn btn-danger\">新增銀行卡</button></a>";
                        ?>
                    </div>
                </div>
            </div>
        </div>




        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <span>
                                银行卡管理（尽量不要删除银行卡，以免统计出错）
                                </span>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table-export"
                                                class="table table-striped table-bordered dataTable no-footer"
                                                role="grid" aria-describedby="bootstrap-data-table-export_info">
                                                <thead>
                                                    <tr role="row">
<!--                                                        <th class="sorting" tabindex="0"-->
<!--                                                            aria-controls="bootstrap-data-table-export" rowspan="1"-->
<!--                                                            colspan="1"-->
<!--                                                            aria-label="Position: activate to sort column ascending">-->
<!--                                                            编号</th>-->
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">银行卡
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
//                                                      echo "<td data-th=\"编号\">".$data[$i]->id."</td>";
                                                      echo "<td data-th=\"银行卡\">".$data[$i]->bank_nm."</td>";
                                                      echo "<td data-th=\"操作\">";
                                                      echo "<a href=". yii\helpers\Url::to(['admin/systemsettings/banks'])."&id=".$data[$i]->id.">
                                                          <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\">
                                                          </i>
                                                          </button>
                                                          </a>";
                                                      echo "<a href=\"#edit\" data-toggle=\"collapse\">";
                                                      echo "<a href=". yii\helpers\Url::to(['admin/systemsettings/bankdelete'])."&id=".$data[$i]->id.">
                                                                <button type=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>";
                                                      echo "</td>";
                                                      echo "</tr>";



                                                    }
                                                  ?>



                                                  <!-- <tr role="row" class="odd">
                                                      <td data-th="编号">1</td>
                                                      <td data-th="银行卡">中国工商银行</td>
                                                      <td data-th="操作">
                                                          <a href="#edit" data-toggle="collapse">
                                                              <button type="button" class="btn btn-primary">
                                                                <i class="fa fa-pencil"></i>
                                                              </button>
                                                          </a>
                                                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                      </td>
                                                  </tr> -->



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
    <script>
    $(document).ready(function(){
        $(".newButton").click(function(){
            $(".new").fadeIn(600);
            $(".edit").fadeOut(600);
        });
        $(".editButton").click(function(){
            $(".new").fadeIn(600);
            $(".edit").fadeOut(600);
        });
    });
    </script>
</body>

</html>
