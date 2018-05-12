<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\States;
/* @var $this yii\web\View */
/* @var $model app\models\Lga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lga-form">
    <?php $form = ActiveForm::begin(['id' => 'lga']); ?>

    <?= $form->field($model, 'state_id')->dropDownList(
      ArrayHelper::map(States::find()->all(), 'state_id', 'state_name'),
      ['prompt' => 'Select State']
      ) ?>

    <?= $form->field($model, 'lga_id')->dropDownList(
      ['prompt' => 'Select Lga']
      ) ?>

    <?php ActiveForm::end(); ?>

</div>
