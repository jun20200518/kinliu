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
                        <!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                        <?php $form = ActiveForm::begin(['options' => ['id' => 'editproductform', 'method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'form-horizontal']]) ?>


                            <div class="row form-group">
                              <?= $form->field($model,'pid')->hiddenInput(['class'=>'form-control','value' => $data->pid])->label(false) ?>
                                <div class="col col-md-2">

                                    <label for="text-input" class=" form-control-label">产品名称</label></div>
                                <div class="col-12 col-md-10">
                                  <?= $form->field($model,'ptitle')->input('text',['class'=>'form-control','value' => $data->ptitle])->label(false) ?>
                                    <!-- <input type="text" id="text-input" name="text-input" value="" -->
                                        <!-- class="form-control"> -->
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">分类</label></div>
                                <div class="col-12 col-md-10">

                                  <?= $form->field($model, 'type')->dropDownList($item)->label(false) ?>

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">风控波动范围</label></div>
                                <div class="col-12 col-md-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <?= $form->field($model,'point_low')->input('text',['class'=>'form-control','value' => $data->point_low])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" value="" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <?= $form->field($model,'point_top')->input('text',['class'=>'form-control','value' => $data->point_top])->label(false) ?>

                                            <!-- <input type="text" id="text-input" name="text-input" value="" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <small class="form-text alert alert-danger">
                                                注意： 客戶訂單在條件範圍內時，會根據訂單的漲或跌，自動減或加最小值與最大值之間的隨機數，留空或者0則為不開啟
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">随机波动范围</label></div>
                                <div class="col-12 col-md-10">
                                  <?= $form->field($model,'rands')->input('text',['class'=>'form-control','value' => $data->rands])->label(false) ?>
                                    <!-- <input type="text" id="text-input" name="text-input" value="" class="form-control"> -->
                                    <small class="form-text alert alert-danger">
                                        注意： 產品獲取接口值後，會加上+-此處的值。如5，則在接口獲取的數據中加上-5~5之間的隨機數。
                                    </small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">产品代码</label></div>
                                <div class="col-12 col-md-10">
                                    <?= $form->field($model,'procode')->input('text',['class'=>'form-control','value' => $data->procode])->label(false) ?>
                                    <!-- <input type="text" id="text-input" name="text-input" placeholder="btc" class="form-control"> -->
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">时间玩法间隔</label></div>
                                <div class="col-12 col-md-10">
                                    <?= $form->field($model,'protime')->input('text',['class'=>'form-control','value' => $data->protime])->label(false) ?>
                                    <!-- <input type="text" id="text-input" name="text-input" placeholder="0.5,1,1.5,3" class="form-control"> -->
                                    <small class="form-text alert alert-danger">
                                        注意： 如時間為：1分、3分、5分、8分，則請用字母逗號將時間分開，如輸入：1,3,5,8。如沒有此玩法則留空。必須為四個
                                    </small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">盈虧比例</label></div>
                                <div class="col-12 col-md-10">
                                    <?= $form->field($model,'proscale')->input('text',['class'=>'form-control','value' => $data->proscale])->label(false) ?>
                                    <!-- <input type="text" id="text-input" name="text-input" placeholder="88,90,95,100,110,120" class="form-control"> -->
                                    <small class="form-text alert alert-danger">
                                        注意： 如比例為：75%、77%，80%、85%，則請用字母逗號將比例分開，如輸入：75,77,80,85。必須為四個，且不得為空
                                    </small>
                                </div>
                            </div>

                            <!-- $time = mb_split("-",$data2->opentime,6); -->
                            <?php
                            // $string="00:00~24:00-00:00~24:00-00:00~24:00-00:00~24:00-00:00~24:00-00:00~24:00-00:00~24:00";
                            $time=(mb_split("-",$data2->opentime));
                            // echo "mb_split("\s",$string)";
                            // $hello = $time[0]."-".$time[1]."-";
                            // echo "$hello";
                            ?>


                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="text-input" class=" form-control-label">开市时间</label></div>
                                <div class="col-12 col-md-10">
                                    <div class="row">
                                      <!-- $String = "Good morning to you.";
　                                    $Arr = mb_split("\s",$String);
                                      print_r($Arr); -->

                                        <div class="col-12 col-md-12">
                                            <?= $form->field($model,'timed1')->input('text',['class'=>'form-control','value' =>$time[0]])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="周一 00:00~24:00" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <?= $form->field($model,'timed2')->input('text',['class'=>'form-control','value' => $time[1]])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="周二 00:00~24:00" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <?= $form->field($model,'timed3')->input('text',['class'=>'form-control','value' => $time[2]])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="周三 00:00~24:00" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <?= $form->field($model,'timed4')->input('text',['class'=>'form-control','value' => $time[3]])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="周四 00:00~24:00" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <?= $form->field($model,'timed5')->input('text',['class'=>'form-control','value' => $time[4]])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="周五 00:00~24:00" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <?= $form->field($model,'timed6')->input('text',['class'=>'form-control','value' => $time[5]])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="周六 00:00~24:00" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <?= $form->field($model,'timed7')->input('text',['class'=>'form-control','value' => $time[6]])->label(false) ?>
                                            <!-- <input type="text" id="text-input" name="text-input" placeholder="周日 00:00~24:00" class="form-control"> -->
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <small class="form-text alert alert-danger">
                                                    注意： 開市時間為00:00~18:00則輸入 00:00~18:00 開市時間為00:00~03:00 和 08:00~24:00;則輸入 如：00:00~03:00|08:00~24:00 不得出現中文符號，全天不開市請留空,時間一定要填寫準確
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">備註</label></div>
                                <div class="col-12 col-md-10">
                                    <?= $form->field($model,'content')->textarea(['rows'=>'9','class'=>'form-control','value' => $data->content])->label(false) ?>
                                    <!-- <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="0-10000:0" class="form-control"></textarea> -->
                                    <small class="form-text alert alert-danger">说明：
                                        此处设置会员ID（如：8888），多个用户用|符号分开（如：8888|9999）设置之后该会员所有订单都会赢利，请谨慎操作。如停止该功能请在上面留空或者填0，并提交。</small>
                                </div>
                            </div>






                            <!--









                           -->

                        <!-- </form> -->
                    </div>
                    <div class="card-footer">

                      <?= Html::submitButton('提交',['class' => 'btn btn-primary btn-sm']);?>
                        <!-- <button type="submit"  class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> 提交
                        </button> -->
<!--                        <button type="reset" class="btn btn-danger btn-sm">-->
<!--                            <i class="fa fa-ban"></i> 清除-->
<!--                        </button>-->
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
