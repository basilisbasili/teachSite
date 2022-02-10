<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceDate extends Controller
{
    public function transformDate($dateMonth){
        $months=
        [
            1=>'Янв',
            2=>'Фев',
            3=>'Мар',
            4=>'Апр',
            5=>'Май',
            6=>'Июн',
            7=>'Июл',
            8=>'Авг',
            9=>'Сен',
            10=>'Окт',
            11=>'Ноя',
            12=>'Дек',
        ];
        return($months[$datemonth]);
    }
}
