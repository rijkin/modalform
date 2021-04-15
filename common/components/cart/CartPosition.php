<?php


namespace common\components\cart;


use common\models\Product;

class CartPosition extends \yii\base\Model
{
        public $id;
        public $price;
        public $quantity;
    /**
     * @var mixed
     */
    protected $_product;

    public function getProduct(){
            if(!$this->_product){
                $this->_product=Product::findOne($this->id);
            }
            return $this->_product;
        }
}