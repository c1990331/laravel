<?php
namespace App\Http\Controllers;

class StaticPagesController
{
    public function about()
    {
        return view('static_pages/about');
    }
    public function help()
    {
        return view('static_pages/help');
//         return view('static_pages/index');
    }
    public function index()
    {
        $func = $this->closureFunc();
        $func('first ');
        $func('second');
        $func('third');
    }
    /**
     * 定义一个闭包
     */
    public function closureFunc()
    {
        $num = 1;
        $func = function($str='')use(&$num)
        {
            $num ++;
            echo $str.'='.$num.'<br>';
        };
        echo $num.'<br>';
        return $func;
        
    }
}

