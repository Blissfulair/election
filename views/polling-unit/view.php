<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model app\models\Polling */

// $this->title = $model1->uniqueid;
// $this->params['breadcrumbs'][] = ['label' => 'Pollings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="polling-view">

    <?= DetailView::widget([
        'model' => $model1,
        'attributes' => [
            'polling_unit_name',
            'ward.ward_name',
            'lga.lga_name',
            'uniquewardid',
            'polling_unit_number',
            'polling_unit_description:ntext',
            'lat',
            'long',
            'entered_by_user',
            'date_entered',
            'user_ip_address',
        ],
    ]) ?>

    <?php Pjax::begin(); ?>    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'party_abbreviation',
                'party_score',
            ],
        ]); ?>
    <?php Pjax::end(); ?>
<?php if(!Yii::$app->user->isGuest): ?>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'party_abbreviation',
                'party_score',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
    <?php endif; ?>
</div>
