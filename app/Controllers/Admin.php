<?php 
namespace App\Controllers;
class Admin extends BaseController {
    public function  index(){
        echo view('admin/adminloginview');
    }
    // public function  login($name , $pass){
    //     echo "user credentials  $name  $pass";
    // }
    public function addpost(){
        echo view('admin/addpost');
    }
    public function  category(){
        echo view('admin/addcat');
    }
}