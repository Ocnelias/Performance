<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "place".
 *
 * @property integer $id
 * @property string $place_city
 * @property string $place_title
 * @property integer $place_capacity
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Performance[] $performances
 */
class Place extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'place';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place_city', 'place_title'], 'required'],
            [['place_capacity', 'created_at', 'updated_at'], 'integer'],
            [['place_city', 'place_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'place_city' => 'Place City',
            'place_title' => 'Place Title',
            'place_capacity' => 'Place Capacity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performance::className(), ['place_id' => 'id']);
    }
}
