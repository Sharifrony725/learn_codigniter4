<?php

namespace App\Controllers;

use App\Models\UserModels;

class FormController extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $page_session = session();
        $data = [];
        $rules = [
            'name' => 'required|alpha',
            'email' => 'required|valid_email',
            'number' => 'required|exact_length[11]',
        ];
        if ($this->request->getMethod() == "post") {
            if ($this->validate($rules)) {
                $myData = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'mobile' => $this->request->getVar('number')
                ];
                $user_model = new UserModels();
                $response =  $user_model->addData($myData);
                if ($response) {
                    $page_session->setTempdata('success', 'User save successfully.', 2);
                    return redirect()->to(current_url());
                } else {
                    $page_session->setTempdata('failed', 'User save failed.', 2);
                    return redirect()->to(current_url());
                }
            } else {
                $data['myErrors'] = $this->validator;
            }
        }
        echo view('user/formview', $data);
    }
}
