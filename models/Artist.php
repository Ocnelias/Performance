<?php

namespace app\models;

use app\models\User;
use Yii;


/**
 * This is the model class for table "artist".
 *
 * @property integer $id
 * @property string $artist_name
 * @property string $artist_music_genre
 * @property string $artist_description
 * @property string $imageFile
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Performance[] $performances
 */
class Artist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artist_name', 'artist_description', 'created_at', 'updated_at'], 'required'],
            [['artist_description'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['artist_name', 'artist_music_genre', 'imageFile'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'artist_name' => 'Artist Name',
            'artist_music_genre' => 'Artist Music Genre',
            'artist_description' => 'Artist Description',
            'imageFile' => 'Image File',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performance::className(), ['artist_id' => 'id']);
    }
}
