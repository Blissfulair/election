<?php

namespace app\models;

use Yii;
use app\models\Lga;
use app\models\Ward;

/**
 * This is the model class for table "polling".
 *
 * @property integer $uniqueid
 * @property integer $polling_unit_id
 * @property integer $ward_id
 * @property integer $lga_id
 * @property integer $uniquewardid
 * @property string $polling_unit_number
 * @property string $polling_unit_name
 * @property string $polling_unit_description
 * @property string $lat
 * @property string $long
 * @property string $entered_by_user
 * @property string $date_entered
 * @property string $user_ip_address
 *
 * @property AnnouncedPuResults[] $results
 */
class PollingUnit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'polling_unit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ward_id', 'lga_id'], 'required'],
            [['ward_id', 'lga_id', 'uniquewardid'], 'integer'],
            [['polling_unit_description'], 'string'],
            [['date_entered', 'polling_unit_id'], 'safe'],
            [['polling_unit_number', 'polling_unit_name', 'entered_by_user', 'user_ip_address'], 'string', 'max' => 50],
            [['lat', 'long'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uniqueid' => 'Uniqueid',
            'polling_unit_id' => 'Polling Unit',
            'ward_id' => 'Ward',
            'lga_id' => 'Lga',
            'uniquewardid' => 'Unique Ward Id',
            'polling_unit_number' => 'Polling Unit Number',
            'polling_unit_name' => 'Polling Unit',
            'polling_unit_description' => 'Polling Unit Description',
            'lat' => 'Lat',
            'long' => 'Long',
            'entered_by_user' => 'Entered By User',
            'date_entered' => 'Date Entered',
            'user_ip_address' => 'User Ip Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(AnnouncedPuResults::className(), ['polling_unit_uniqueid' => 'uniqueid']);
    }
    public function getWard()
    {
        return $this->hasOne(Ward::className(), ['ward_id' => 'ward_id']);
    }
    public function getLga()
    {
        return $this->hasOne(Lga::className(), ['lga_id' => 'lga_id']);
    }
}
