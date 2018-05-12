<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Polling */

$this->title = 'Update Polling: ' . $model1->uniqueid;
$this->params['breadcrumbs'][] = ['label' => 'Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model1->uniqueid, 'url' => ['view', 'id' => $model1->uniqueid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="polling-update">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model1' => $model1,
        'model2' => $model2,
        'lga' => $lga,
    ]) ?>
  </div>
</div>
</div>
