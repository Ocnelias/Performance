<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Performance */

$this->title = $model->performance_title;
$this->params['breadcrumbs'][] = ['label' => 'Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performance-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'performance_title',
            'performance_date',
            'performance_duration',
            'performance_price',
            'performance_description:ntext',


        ],
    ]) ?>

</div>
