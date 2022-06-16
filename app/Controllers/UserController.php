<?php

namespace App\Controllers;

use App\Models\UserModels;

class UserController extends BaseController
{
    public function index()
    {
        
        //$parser = service('parser');
        $user_model = new UserModels();
        $data['allData'] =  $user_model->getData();
        return view('user/userview' , $data);
        // $parser->setData($data);
        // return $parser->render('user/userview');
    }
}
