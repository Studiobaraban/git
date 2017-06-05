<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mark_id',
            'model_id',
            'foto',
            'class',
            // 'kuzov',
            // 'complect',
            // 'korobka',
            // 'power',
            // 'razgon',
            // 'gas',
            // 'price',
            // 'disk',
            // 'saleone',
            // 'saletwo',
            // 'salethree',
            // 'COL 16',
            // 'COL 17',
            // 'COL 18',
            // 'COL 19',
            // 'toone',
            // 'totwo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
