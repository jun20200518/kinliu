<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
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
    <link rel="stylesheet" href="/style/reset.css" />
    <link rel="stylesheet" href="/style/all.css" />
    <link rel="stylesheet" href="/style/accout.css" />
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
            <img class="mainLogo" src="img/logo/kucoin-logo.svg" alt="" />
        </a>
        <div >
            <img src="img/none.svg" alt="" />
        </div>
    </nav>
</header>
<!-- 表单 -->


    <!-- 修改帐户 -->
    <div class="modify_account_wrapper">
        <div class="modify_account_head">
            修改银行卡
        </div>

        <?php $form = ActiveForm::begin(['options' => ['id' => 'drawmoneyinfo', 'method' => 'POST', 'enctype' => 'multipart/form-data']]) ?>
        <div class="modify_account_footer">
            <div class="modify_input">
                <span>銀　　行：</span>
                <?php echo $form->field($model, 'bankno')
                    ->dropDownList(ArrayHelper::map($bankslist,'bank_no','bank_nm'),['class'=>'modify_bank'])
                    ->label(false);
                ?>
            </div>
            <div class="modify_input">
                <span>帐　　号：</span>
                <?= $form->field($model,'accntno')->input('text')->label(false) ?>
            </div>
            <div class="modify_input">
                <span>户　　名：</span>
                <?= $form->field($model,'accntnm')->input('text')->label(false) ?>
            </div>
            <div class="modify_input">
                <span>省　　份：</span>
                <?=
                //                                                    $model->id=$db_city->city;
                $form->field($model, 'city')
                    ->dropDownList(ArrayHelper::map($citylist,'city_nm','city_nm'),['class'=>'modify_bank'])
                    ->label(false);
                ?>
            </div>
            <div class="modify_input">
                <span>市　　名：</span>
                <?= $form->field($model,'address')->input('text')->label(false) ?>
            </div>
            <div class="modify_input">
                <span>身分证号：</span>
                <?= $form->field($model,'phone')->input('text')->label(false) ?>
            </div>
            <div class="modify_input">
                <span>开户支行：</span>
                <?= $form->field($model,'branch')->input('text')->label(false) ?>
            </div>
            </divclass="modify_input">
            <div class="modify_account_Buttons">
                <?=
                Html::submitButton('确认',['class' => 'btn modify_account_Buttons_submit']);
                ?>

            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>



    <!-- 右側選單 -->
    <?php include("leftdeposit.php"); ?>

    <!-- 左側選單 -->
    <?php include("rightdeposit.php"); ?>

<script src="/js/buttonTrigger.js"></script>

</body>

</html>