<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $name
 * @property int $price
 * @property string $description
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'description'], 'required'],
            [['price'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 300],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
