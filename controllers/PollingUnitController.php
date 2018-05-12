<?php

namespace app\controllers;

use Yii;
use app\models\PollingUnit;
use app\models\Lga;
use app\models\Ward;
use app\models\Party;
use yii\base\Model;
use app\models\AnnouncedPuResults;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PollingController implements the CRUD actions for Polling model.
 */
class PollingUnitController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Polling models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => PollingUnit::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Polling model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
      $dataProvider = new ArrayDataProvider([
          'allModels' => AnnouncedPuResults::find()
          ->select(['party_abbreviation', 'party_score'])
          ->where(['polling_unit_uniqueid' => $id])->all(),
      ]);

        return $this->render('view', [
            'model1' => $this->findModel($id),
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Polling model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // $model1 = new PollingUnit();
        // $model2 = new AnnouncedPuResults();
        //
        // if ($model1->load(Yii::$app->request->post()) &&  $model2->load(Yii::$app->request->post())) {
        //   $model1->save();
        //   $model2->polling_unit_uniqueid = $model1->uniqueid;
        //   $model2->date_entered = $model1->date_entered;
        //   $model2->user_ip_address = $model1->user_ip_address;
        //   $model2->entered_by_user = $model1->entered_by_user;
        //   $model2->save();
        $model1 = new PollingUnit();
        $lga = new Lga();
        $count = Yii::$app->request->post('AnnouncedPuResults', []);
        $model2 = [];
        for ($i=0; $i <= 8; $i++) {
          $model = new AnnouncedPuResults();
          $model->setAttributes($count);
          $model2[] = $model;
        }
        if ($model1->load(Yii::$app->request->post()) && Model::loadMultiple($model2, Yii::$app->request->post())){
          $model1->date_entered  = date("Y-m-d h:i:s", time());
          $model1->save();
        //if(Model::loadMultiple($model2, Yii::$app->request->post()) && Model::validateMultiple($model2)){
          foreach ($model2 as $model) {
          //  $model1->save();
             $model->polling_unit_uniqueid = $model1->uniqueid;
             $model->date_entered = $model1->date_entered;
             $model->user_ip_address = $model1->user_ip_address;
             $model->entered_by_user = $model1->entered_by_user;
             $model->save();
          }
          //}
            return $this->redirect(['view', 'id' => $model1->uniqueid]);
        } else {
          $model2 = new AnnouncedPuResults();
            return $this->render('create', [
                'model1' => $model1,
                'model2' => $model2,
                'lga'    => $lga,
            ]);
        }
    }

    /**
     * Updates an existing Polling model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model1 = $this->findModel($id);
        $lga = new Lga();
        $count = Yii::$app->request->post('AnnouncedPuResults', []);
        $model2 = AnnouncedPuResults::find()->indexBy('id')->all();
        for ($i=0; $i <= 8; $i++) {
          $model = new AnnouncedPuResults();
          $model->setAttributes($count);
          $model2[] = $model;
        }

        if ($model1->load(Yii::$app->request->post()) && Model::loadMultiple($model2, Yii::$app->request->post())){
          $model1->date_entered  = date("Y-m-d h:i:s", time());
          $model1->save();
          foreach ($model2 as $model) {
          //  $model1->save();
             $model->polling_unit_uniqueid = $model1->uniqueid;
             $model->date_entered = $model1->date_entered;
             $model->user_ip_address = $model1->user_ip_address;
             $model->entered_by_user = $model1->entered_by_user;
             $model->save();
          }
            return $this->redirect(['view', 'id' => $model1->uniqueid]);
        } else {
           $model2 = new AnnouncedPuResults();
            return $this->render('update', [
              'model1' => $model1,
              'model2' => $model2,
              'lga' => $lga,
            ]);
        }
    }

    /**
     * Deletes an existing Polling model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
#==================================================================
public function actionLga($id){

  $lgas = Lga::find()->select(['lga_name', 'lga_id'])->where(['state_id' => $id])->all();
  if($lgas){
    echo '<option>Select Local Government</option>';
    foreach ($lgas as $lga) {
      echo '<option value="'.$lga->lga_id.'">'.$lga->lga_name.'</option>';
    }
  }else {
    echo '<option>-</option>';
  }
}
public function actionJohn(){
    if($_GET['region']){
$region = $_GET['region'];
  }
}
#====================================================================
public function actionWard($id){
  $wards = Ward::find()->select(['ward_name', 'ward_id'])->where(['lga_id' => $id])->all();
  if($wards){
    echo '<option>Select Ward</option>';
    foreach ($wards as $ward) {
      echo '<option value="'.$ward->ward_id.'">'.$ward->ward_name.'</option>';
    }
  }else {
    echo '<option>-</option>';
  }
}
#===================================================================
public function actionPu($id){
  $polling_units = PollingUnit::find()->where(['ward_id' => $id])->all();
  if($polling_units){
    echo '<option>Select Polling Unit</option>';
    foreach ($polling_units as $polling_unit) {
      echo '<option value="'.$polling_unit->uniqueid.'">'.$polling_unit->polling_unit_name.'</option>';
    }
  }else {
    echo '<option>-</option>';
  }
}
#======================================================================
public function actionParty($ids){
  $id = explode(',', $ids);
  $num = count($id);
  if ($num == 1) {
        $parties = Party::find()->Where(['<>','Partyid', $ids])->all();
        if($parties){
              echo '<option value="">Select Party</option>';
          foreach ($parties as $party) {
              echo '<option value="'.$party->partyid.'">'.$party->partyname.'</option>';

          }
        }
  }
elseif ($num > 1) {
    $part = [];
    $parts = [];
    $part1 = ['Select Party'];
    $part2 = [];
    $parties = Party::find()->select(['partyid', 'partyname'])->all();
    foreach ($parties as $party) {
      $part1[] = $party->partyid;
    }
    foreach($id as $key => $value) {
      $parts = Party::find()->select(['partyid', 'partyname'])->Where(['Partyid' => $value])->all();
      foreach ($parts as $part) {
        $part2[] = $part->partyid;
      }
    }
$diffs = array_diff($part1, $part2);
if($diffs){
  foreach ($diffs as  $diff) {
      echo '<option value="'.$diff.'">'.$diff.'</option>';
      }
    }
  }
}
#=====================================================================
  /**
     * Finds the Polling model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PollingUnit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PollingUnit::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
