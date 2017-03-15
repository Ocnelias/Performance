<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerformanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="performance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'performance_title') ?>

    <?= $form->field($model, 'performance_date') ?>

    <?= $form->field($model, 'performance_duration') ?>

    <?= $form->field($model, 'performance_price') ?>

    <?php // echo $form->field($model, 'performance_description') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'artist_id') ?>

    <?php // echo $form->field($model, 'place_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
