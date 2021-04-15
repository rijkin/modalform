<?php


namespace common\components\cart;



use Yii;
use yii\base\InvalidConfigException;

class CartComponent extends \yii\base\Component
{

    public $cartItemClass;

    protected $_items=[



    ];
    /**
     * @var string
     */
    public $sessionKey= 'Cart_Store';


    protected function saveToSession(){
        Yii::$app->session->set($this->sessionKey,$this->_items);
    }

    public function init ()
    {
        parent::init();
        if($this->cartItemClass==null){
            throw new InvalidConfigException('CartComponent::cartItemClass must be set.');
        }
        $this->_items=Yii::$app->getSession()->get($this->sessionKey,[]);
    }

    public function put(CartItemInterface $item,int $quantity){
        $cartPosition = new CartPosition();
        $cartPosition->id = $item->getCartItemId();
        $cartPosition->price = $item->getCartItemPrice();
        $cartPosition->quantity = $quantity;
        $this->_items[]= $cartPosition;
        $this->saveToSession();

    }
    public function remove(CartItemInterface $item,int $quantity){

    }
    public function delete(CartItemInterface $item){

    }
    public function items(){

        return $this->_items;

    }
    public function getItemsWithModels(){
        //populeaza product pt fiecare cart position
    }



    //properties(
    //   id =>  ,
    //    price => ,
    //    quantity => ,



}