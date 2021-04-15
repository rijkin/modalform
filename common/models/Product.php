<?php

namespace common\models;

use common\components\cart\CartItemInterface;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property int $price
 * @property string $description
 * @property Review[] $reviews
 */
class Product extends \yii\db\ActiveRecord implements CartItemInterface
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

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews(){
        return $this->hasMany(Review::class,['product_id'=>'id']);
    }

    /**
     * @inheritDoc
     */
    public function getCartItemId()
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getCartItemPrice()
    {
        return $this->price;
    }
}
