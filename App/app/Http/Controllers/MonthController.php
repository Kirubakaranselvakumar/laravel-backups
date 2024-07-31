<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function __construct()
    {
        $this -> middleware('month');
    }


    public function numToMonth(Request $request){
        $num = $request->num;
        $user = $request->input('user');
        if ($num==1)
        {
            return 'JANUARY of '.$user;
        }
        else if($num==2)
        {
            return 'FEBRUARY of '.$user;
        }
        else if($num==3)
        {
            return 'MARCH of '.$user;
        }
    }

}

