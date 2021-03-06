<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lga */

$this->title = 'Create Lga';
$this->params['breadcrumbs'][] = ['label' => 'Lgas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lga-create">
<div class="col-xs-8 col-xs-offset-2">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
<div class="card">
  <div class="card-body">
    <table class="table table-bordered">
    </table>
  </div>
</div>
</div>
</div>
