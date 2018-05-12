<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Polling Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polling-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Polling Units', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uniqueid',
            'polling_unit_name',
            [
              'attribute' => 'ward_id',
              'value' => 'ward.ward_name',
            ],
            [
              'attribute' => 'lga_id',
              'value' => 'lga.lga_name',
            ],
            'uniquewardid',
            // 'polling_unit_number',
            // 'polling_unit_name',
            // 'polling_unit_description:ntext',
            // 'lat',
            // 'long',
            // 'entered_by_user',
            // 'date_entered',
            // 'user_ip_address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
