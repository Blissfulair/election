<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "results".
 *
 * @property integer $id
 * @property integer $polling_unit_uniqueid
 * @property string $party_abbreviation
 * @property integer $party_score
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['polling_unit_uniqueid', 'party_abbreviation', 'party_score'], 'required'],
            [['polling_unit_uniqueid', 'party_score'], 'integer'],
            [['party_abbreviation'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'polling_unit_uniqueid' => 'Polling Unit Uniqueid',
            'party_abbreviation' => 'Party Abbreviation',
            'party_score' => 'Party Score',
        ];
    }
}
