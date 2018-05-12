<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Polling */

$this->title = 'Create A New Polling Unit';
$this->params['breadcrumbs'][] = ['label' => 'Polling Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polling-create">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
      'model1' => $model1,
      'model2' => $model2,
      'lga'    => $lga,
    ]) ?>
    </div>
  </div>
</div>
