<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Party;
use app\models\States;
use app\models\Lga;
use app\models\Ward;

/* @var $this yii\web\View */
/* @var $model1 app\models\Polling */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polling-form">

    <?php $form = ActiveForm::begin(['id' => 'polling']); ?>

    <?= $form->field($lga, 'state_id')->dropDownList(
      ArrayHelper::map(States::find()->all(), 'state_id', 'state_name'),
       ['prompt' => 'Select State']) ?>

    <?= $form->field($model1, 'lga_id')->dropDownList(
      ArrayHelper::map(Lga::find(), 'lga_id', 'lga_name'),
       ['prompt' => 'Select Local Government']) ?>

    <?= $form->field($model1, 'ward_id')->dropDownList(
      ArrayHelper::map(Ward::find(), 'ward_id', 'ward_name'),
       ['prompt' => 'Select Ward']) ?>

    <?= $form->field($model1, 'uniquewardid')->textInput() ?>

    <?= $form->field($model1, 'polling_unit_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model1, 'polling_unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model1, 'polling_unit_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model1, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model1, 'long')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model1, 'entered_by_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model1, 'user_ip_address')->textInput(['maxlength' => true]) ?>
      <?= $form->field($model1, 'ward_id')->dropDownList(
      ArrayHelper::map(Ward::find(), 'ward_id', 'ward_name'),
       ['prompt' => 'Select Ward']) ?>

    <div class="row">
      <div class="col-xs-6">
  <?= $form->field($model2, "[0]party_abbreviation")->dropDownList(
    ArrayHelper::map(Party::find()->all(), 'partyid', 'partyname'),
     ['prompt' => 'Select Party']) ?>
      </div>
      <div class="col-xs-6">
  <?= $form->field($model2, "[0]party_score")->textInput(['maxlength' => true]) ?>
      </div>
    </div>

    <?php for($i= 1; $i<= 8; $i++): ?>
      <div class="row">
        <div class="col-xs-6">
    <?= $form->field($model2, "[$i]party_abbreviation")->dropDownList(
       ['prompt' => 'Select Party']) ?>
        </div>
        <div class="col-xs-6">
    <?= $form->field($model2, "[$i]party_score")->textInput(['maxlength' => true]) ?>
        </div>
      </div>
<?php endfor; ?>
    <div class="form-group">
        <?= Html::submitButton($model1->isNewRecord ? 'Submit' : 'Update', ['class' => $model1->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
