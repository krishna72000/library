<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-lg-12">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="col-lg-3">
    <?= $form->field($model, 'edition')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3">
    <?= $form->field($model, 'pages')->textInput() ?>
    </div>
    <div class="col-lg-3">
    <?= $form->field($model, 'copy_no')->textInput() ?>
    </div>
    <div class="col-lg-3">
    <?= $form->field($model, 'category')->textInput() ?>
    </div>
    <div class="col-lg-12">
    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    </div>
</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
