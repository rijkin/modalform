<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scovealca".
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 */
class Scovealca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scovealca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['name', 'email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 255],
            [['phone'], 'number', 'numberPattern' => '/^[0-9]*$/'],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
 //           'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
        ];
    }
}
