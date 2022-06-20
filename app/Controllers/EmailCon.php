<?php

namespace App\Controllers;

use App\Models\AuthModels;

class EmailCon extends BaseController
{

    public function index()
    {
        return view('admin/login');
    }
    public function signUp()
    {

        helper('form');
        if ($this->request->getMethod() == "post") {
            $unique_id = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz' . time()));
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'mobile' => $this->request->getVar('mobile'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'unique_id' => $unique_id
            ];
            $auth = new AuthModels();
            $result =  $auth->createAccount($data);
            if ($result) {
                $session = session();
                $email = \Config\Services::email();
                $to = $this->request->getVar('email');
                $subject = 'CodeIgniter 4 Email  Account Activation Link - Sharif ';
                $msg = "Hey!" . $this->request->getVar('name', FILTER_SANITIZE_STRING) . "<br> <br> For Activate your valuable account . Please click the link below <br> <br>"
                    . "<a href='" . base_url() . "/EmailCon/activate/" . $unique_id . "'>Activate Now </a><br><br>";
                $email->setTo($to);
                $email->setFrom('sharifrony725@gmail.com', 'Activation Link');
                $email->setSubject($subject);
                $email->setMessage($msg);
                if ($email->send()) {
                    $session->setTempdata('msg', 'account create successfully , for verify your account please click the link on email', 5);
                    return redirect()->to(current_url());
                } else {
                    $data = $email->printDebugger(['headers']);
                    print_r($data);
                }
            } else {
                echo "Account create failed";
            }
        }
        return view('admin/signup');
    }
    public function activate($unique_id  = null)
    {
        echo 'ok';
    }
}
