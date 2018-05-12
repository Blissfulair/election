<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Results */

$this->title = 'Check Polling Units Results';
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="results-create">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model1' => $model1,
        'lga' => $lga,
    ]) ?>
  </div>
</div>
<div id="div">

</div>
</div>
