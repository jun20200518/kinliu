<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(['options' => ['id' => 'Addpost', 'method' => 'POST', 'enctype' => 'POST', 'method' => 'POST']]) ?>
  <?= $form->field($model,'account')->label(false) ?>
  <?= $form->field($model,'password') ?>

  <?= Html::submitButton('新增');?>

<?php ActiveForm::end(); ?>
