<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "announced_pu_results".
 *
 * @property integer $id
 * @property integer $polling_unit_uniqueid
 * @property string $party_abbreviation
 * @property integer $party_score
 * @property string $entered_by_user
 * @property string $date_entered
 * @property string $user_ip_address
 *
 * @property PollingUnit $pollingUnitUnique
 */
class AnnouncedPuResults extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announced_pu_results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['polling_unit_uniqueid', 'party_abbreviation', 'party_score', 'entered_by_user', 'date_entered', 'user_ip_address'], 'required'],
            [['polling_unit_uniqueid', 'party_score'], 'integer'],
            [['date_entered'], 'safe'],
            [['party_abbreviation'], 'string', 'max' => 8],
            [['entered_by_user', 'user_ip_address'], 'string', 'max' => 50],
            [['polling_unit_uniqueid'], 'exist', 'skipOnError' => true, 'targetClass' => PollingUnit::className(), 'targetAttribute' => ['polling_unit_uniqueid' => 'uniqueid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'polling_unit_uniqueid' => 'Polling Unit',
            'party_abbreviation' => 'Party Abbreviation',
            'party_score' => 'Party Score',
            'entered_by_user' => 'Entered By User',
            'date_entered' => 'Date Entered',
            'user_ip_address' => 'User Ip Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollingUnit()
    {
        return $this->hasOne(PollingUnit::className(), ['uniqueid' => 'polling_unit_uniqueid']);
    }
    public function getParties(){
      return $this->hasMany(Party::className(), ['id' => 'party_id']);
    }
    public function getResult()
    {
        return $this->hasMany(PollingUnit::className(), ['uniqueid' => 'polling_unit_uniqueid']);
    }
}
