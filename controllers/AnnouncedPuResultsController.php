<?php

namespace app\controllers;

use Yii;
use app\models\AnnouncedPuResults;
use app\models\Lga;
use app\models\PollingUnit;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResultsController implements the CRUD actions for Results model.
 */
class AnnouncedPuResultsController extends Controller
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
     * Lists all Results models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AnnouncedPuResults::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Results model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Results model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id =null)
    {
      $dataProvider = new ArrayDataProvider([
          'allModels' => AnnouncedPuResults::find()
          ->select(['party_abbreviation', 'party_score'])
          ->where(['polling_unit_uniqueid' => $id])->all(),
      ]);
        $model = new AnnouncedPuResults();
        $model1 = new PollingUnit();
        $lga = new Lga();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->result_id]);
        } else {
            return $this->render('create', [
              'model' => $model,
              'model1' => $model1,
              'lga' => $lga,
              'dataProvider' => $dataProvider,
            ]);
        }
    }

    /**
     * Updates an existing Results model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model1 = new PollingUnit();
        $lga = new Lga();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->result_id]);
        } else {
            return $this->render('update', [
              'model' => $model,
              'model1' => $model1,
              'lga' => $lga,
            ]);
        }
    }

    /**
     * Deletes an existing Results model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionRes($id){
    $groups = PollingUnit::find()->where(['lga_id' => $id])->joinwith('results')->all();
    $PDP = 0;
    $ACN = 0;
    $LABOUR = 0;
    $DPP = 0;
    $PPA = 0;
    $CDC = 0;
    $JP = 0;
    $ANPP = 0;
    $CPP = 0;
    foreach ($groups as $group) {
      //var_dump($group->results);

      foreach ($group->results as $value) {
        switch ($value->party_abbreviation) {
          case 'PDP':
            $PDP += $value->party_score;
            break;
          case 'ACN':
            $ACN += $value->party_score;
            break;
          case 'LABOUR':
            $LABOUR += $value->party_score;
            break;
          case 'DPP':
            $DPP += $value->party_score;
            break;
          case 'PPA':
            $PPA += $value->party_score;
            break;
          case 'CDC':
            $CDC += $value->party_score;
            break;
          case 'JP':
            $JP += $value->party_score;
            break;
          case 'ANPP':
            $ANPP += $value->party_score;
            break;
          case 'CPP':
            $CPP += $value->party_score;
            break;
        }

      }
    }
    echo '<tr><th>Party</th>'.'<th>Party Score</th></tr>';
    echo '<tr><td>PDP</td>'.'<td>'.$PDP.'</td></tr>';
    echo '<tr><td>ACN</td>'.'<td>'.$ACN.'</td></tr>';
    echo '<tr><td>DPP</td>'.'<td>'.$DPP.'</td></tr>';
    echo '<tr><td>PPA</td>'.'<td>'.$PPA.'</td></tr>';
    echo '<tr><td>CDC</td>'.'<td>'.$CDC.'</td></tr>';
    echo '<tr><td>JP</td>'.'<td>'.$JP.'</td></tr>';
    echo '<tr><td>ANPP</td>'.'<td>'.$ANPP.'</td></tr>';
    echo '<tr><td>LABOUR</td>'.'<td>'.$LABOUR.'</td></tr>';
    echo '<tr><td>CPP</td>'.'<td>'.$CPP.'</td></tr>';

    }
    /**
     * Finds the Results model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AnnouncedPuResults the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AnnouncedPuResults::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
