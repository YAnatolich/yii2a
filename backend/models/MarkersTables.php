<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "markers_tables".
 *
 * @property integer $id
 * @property string $address
 * @property string $lat
 * @property string $lng
 * @property string $date
 * @property string $rgb
 */
class MarkersTables extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'markers_tables';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'lat', 'lng', 'rgb'], 'required'],
            [['date'], 'safe'],
            [['address', 'lat', 'lng', 'rgb'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'date' => 'Date',
            'rgb' => 'Rgb',
        ];
    }
}
