<?php

namespace frontend\models;

use frontend\models\Scovealca;
use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $phone;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            [['phone'], 'number', 'numberPattern' => '/^[0-9]*$/'],
        ];
    }

    public function saveScovealca()
    {
        if (!$this->validate()) {
            Yii::error($this->errors);
            return null;
        }

        $scovealca = new Scovealca();
        $scovealca->name = $this->name;
        $scovealca->email = $this->email;
        $scovealca->phone = $this->phone;
        if ($scovealca->save()) {
            return true;
        } else {
            Yii::error($scovealca->errors);
            return false;
        }


    }
}