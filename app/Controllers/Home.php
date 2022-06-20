<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Index Title'
        ];
        return view('welcome_message' , $data);
    }
    public function submit_form(){
        echo view('form/form');
    }
    public function test(){
        $data = [
            'page_title' => 'Test Title'
        ];
        return view('blog/index' , $data);
    }
}
