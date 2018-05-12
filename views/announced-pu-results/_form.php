<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Party;
use app\models\States;
use app\models\Lga;
use app\models\Ward;
use app\models\PollingUnit;
/* @var $this yii\web\View */
/* @var $model app\models\Results */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="results-form">

    <?php $form = ActiveForm::begin(['id' => 'results']); ?>


        <?= $form->field($lga, 'state_id')->dropDownList(
          ArrayHelper::map(States::find()->all(), 'state_id', 'state_name'),
           ['prompt' => 'Select State']) ?>

        <?= $form->field($model1, 'lga_id')->dropDownList(
           ['prompt' => 'Select Local Government']) ?>

        <?= $form->field($model1, 'ward_id')->dropDownList(
           ['prompt' => 'Select Ward']) ?>

    <?= $form->field($model1, 'polling_unit_id')->dropDownList(
       ['prompt' => 'Select Polling unit']) ?>

    <?php ActiveForm::end(); ?>

</div>
