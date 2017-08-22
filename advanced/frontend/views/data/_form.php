<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Data */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->Input(['email']) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

   <!--  <?= $form->field($model, 'Date_of_birth')->widget(\yii\jui\DatePicker::classname(), [
    //'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
]) ?> -->
<?= $form->field($model, 'Date_of_birth')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>

    <?= $form->field($model, 'note')->textArea() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
