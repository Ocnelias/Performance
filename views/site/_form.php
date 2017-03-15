<?php


use yii\widgets\ActiveForm;
use app\models\Artist;
use app\models\Place;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Performance */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$artists = Artist::find()->all();
$artists_items = ArrayHelper::map($artists,'id','artist_name');
$artists_params = ['prompt' => 'choose artist'];

$place = Place::find()->all();
$place_items = ArrayHelper::map($place,'id','place_title');
$place_params = ['prompt' => 'choose concert place'];
?>


<div class="performance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'performance_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'performance_date')->textInput() ?>

    <?= $form->field($model, 'performance_duration')->textInput() ?>

    <?= $form->field($model, 'performance_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'performance_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'artist_id')->dropDownList($artists_items,$artists_params); ?>

    <?= $form->field($model, 'place_id')->dropDownList($place_items,$place_params); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
