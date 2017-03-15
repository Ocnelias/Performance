<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PerformanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Performances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'performance_title',
            'performance_date',
            'performance_price',
            'performance_description:ntext',
			

[
'attribute' => 'artist',
 'value' => 'artist.artist_name',
],

[
'attribute' => 'Concert city',
 'value' => 'place.place_city',
],




            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

 <p>
        <?= Html::a('Show all artists', ['/artist'], ['class' => 'btn btn-info']) ?>
    </p>
	
 <p>
        <?= Html::a('Show all concert places', ['/place'], ['class' => 'btn btn-info']) ?>
    </p>
	


    <p>
        <?= Html::a('Create Performance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
