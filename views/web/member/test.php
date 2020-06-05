<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Standard;
?>
<!DOCTYPE html>
<html lang="en">
<?php
set_include_path("/data/htdocs/zb/views/");
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no">
    <title>Document</title>
    <link rel="stylesheet" href="style/reset.css" />
    <link rel="stylesheet" href="style/all.css" />
    <link rel="stylesheet" href="style/accout.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
</head>


<body>

<div class="blurMask"></div>
<header>
    <!-- 导览列 -->
    <nav class="mainNav">
        <div class="marketSelectMenuButton">
            <img src="img/personal.svg" alt="" />
        </div>
        <a href="<?php echo yii\helpers\Url::to(['web/index/index1']) ?>">
            <img class="mainLogo" src="img/logo/bbx_logo_fff.svg" alt="" />
        </a>
        <div >
            <img src="img/none.svg" alt="" />
        </div>
    </nav>
</header>
<!-- 表单 -->

    <div id="main">
        <div class="modify_account">
            <div class="modify_account_wrapper">
        <?php $form = ActiveForm::begin(['options' => ['id' => 'drawmoneyinfo', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
        <div class="modify_account_footer">
            <div class="modify_input">
                <span>銀　　行：</span>
                <?php echo $form->field($model, 'bankno')
                    ->dropDownList(ArrayHelper::map($bankslist,'bank_no','bank_nm'),['class'=>'modify_bank','value' => $db_bankcard->bankno])
                    ->label(false);
                ?>
            </div>
            <div class="modify_input">
                <span >银行卡号：</span>
                <?= $form->field($model,'accntno')->input('text',['value' => $db_bankcard->accntno])->label(false) ?>
            </div>
            <div class="modify_input">
                <span >户　　名：</span>
                <?= $form->field($model,'accntnm')->input('text',['value' => $db_bankcard->accntnm])->label(false) ?>
            </div>
            <div class="modify_input">
                <span >省　　份：</span>
                <?= $form->field($model,'city')->input('text',['value' => $db_bankcard->city])->label(false) ?>
            </div>
            <div class="modify_input">
                <span >市　　名：</span>
                <?= $form->field($model,'address')->input('text',['value' => $db_bankcard->address])->label(false) ?>
            </div>
            <div class="modify_input">
                <span >身分证号：</span>
                <?= $form->field($model,'phone')->input('text',['value' => $db_bankcard->phone])->label(false) ?>
            </div>
            <div class="modify_input">
                <span>开户支行：</span>
                <?= $form->field($model,'branch')->input('text',['value' => $db_bankcard->branch])->label(false) ?>
            </div>
        </div>
        <div class="modify_account_Buttons">

            <?=
            Html::submitButton('确认',['class' => 'btn modify_account_Buttons_submit']);
            ?>
            <button href="javascript:;" class="btn modify_account_Buttons_cancel">取消</button>

        </div>
        <?php ActiveForm::end(); ?>
            </div>
            </div>
    </div>
<script src="js/buttonTrigger.js"></script>



</body>

</html>
