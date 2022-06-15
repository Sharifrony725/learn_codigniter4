<?php

namespace App\Controllers;

class Mycon extends BaseController
{
    public function index(){
        echo "my con controller";
    }
    public function test(){
        echo "this is a test function from Mycon controller";
    }
    // public function _remap($method){
    //     if(method_exists($this , $method)){
    //         return $this->method;
    //     }else{
    //         echo "404 Not Found!";
    //     }
    // }
    public function reTest($param){
        echo "Our output is $param";
    }
}
