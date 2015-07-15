<?php
/**
 * Created by PhpStorm.
 * User: sholomka
 * Date: 13.07.2015
 * Time: 22:59
 */

namespace app\models\customer;
use yii\db\ActiveRecord;

class CustomerRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'customer';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            ['name', 'required'],
            ['name', 'string', 'max' => 256],

//            ['birth_date', 'date', 'format' => 'Y-m-d'],
            ['notes', 'safe']
        ];
    }
}