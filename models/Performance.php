<?php

namespace app\models;

use app\models\User;
use Yii;

/**
 * This is the model class for table "performance".
 *
 * @property integer $id
 * @property string $performance_title
 * @property string $performance_date
 * @property integer $performance_duration
 * @property string $performance_price
 * @property string $performance_description
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $artist_id
 * @property integer $place_id
 *
 * @property Artist $artist
 * @property Place $place
 */
class Performance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'performance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['performance_title', 'performance_date', 'performance_duration', 'performance_price', 'performance_description','artist_id','place_id'], 'required'],
            [['performance_date'], 'safe'],
            [['performance_duration', 'created_at', 'updated_at', 'artist_id', 'place_id'], 'integer'],
            [['performance_price'], 'number'],
            [['performance_description'], 'string'],
            [['performance_title'], 'string', 'max' => 255],
            [['artist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artist::className(), 'targetAttribute' => ['artist_id' => 'id']],
            [['place_id'], 'exist', 'skipOnError' => true, 'targetClass' => Place::className(), 'targetAttribute' => ['place_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'performance_title' => 'Performance Title',
            'performance_date' => 'Date',
            'performance_duration' => 'Performance duration, hours',
            'performance_price' => 'Price, USD',
            'performance_description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'artist_id' => 'Artist',
            'place_id' => 'Place',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtist()
    {
        return $this->hasOne(Artist::className(), ['id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlace()
    {
        return $this->hasOne(Place::className(), ['id' => 'place_id']);
    }
}
