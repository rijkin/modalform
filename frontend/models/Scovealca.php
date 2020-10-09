<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scovealca".
 *
 * @property string $name
 * @property string $email
 * @property int $phone
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
            [['name', 'email'], 'required'],
            [['phone'], 'integer'],
            [['name', 'email'], 'string', 'max' => 52],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }
}
