<?php
/**
 * Created by PhpStorm.
 * User: sholomka
 * Date: 13.07.2015
 * Time: 23:07
 */

namespace app\models\customer;
use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            ['customer_id', 'number'],
            ['number', 'string'],
            [['customer_id', 'number'], 'required'],
        ];
    }
}