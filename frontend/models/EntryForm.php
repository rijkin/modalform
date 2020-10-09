<?php

namespace frontend\models;

use app\models\Scovealca;
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
            [['phone', 'phone'], 'required'],
        ];
    }

    public function saveScovealca()
    {
        if (!$this->validate()) {
            Yii::error($this->errors);
            return null;
        }

        $Scovealca = new Scovealca();
        $Scovealca->name = $this->name;
        $Scovealca->email = $this->email;
        $Scovealca->phone = $this->phone;
        if ($Scovealca->save()) {
            return true;
        } else {
            Yii::error($Scovealca->errors);
            return false;
        }


    }
}