<?php
/**
 * Created by PhpStorm.
 * User: sholomka
 * Date: 13.07.2015
 * Time: 21:11
 */

namespace app\models\customer;


class Phone
{
    /**
     * @var string
     */
    public $number;

    /**
     * Phone constructor.
     * @param string $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }


}