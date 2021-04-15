<?php

namespace frontend\controllers;

use common\models\Product;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class CartController extends \yii\web\Controller
{

    public function actionAddItem($id){
//find product by id(get/post)
        $quantity=1;
        if (($model = Product::findOne($id)) == null) {
            throw new NotFoundHttpException('The requested product does not exist.');
        }

//invoke yii::app->cart->put(obiectul găsit+cantitatea(default to 1))
        Yii::$app->cart->put($model,$quantity);
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionListItems(){
        Yii::$app->response->format=Response::FORMAT_JSON;
        return Yii::$app->cart->items();
    }

    public function actionViewCart(){
        return $this->render('index'
        );
    }
}   