<?php

namespace App\Controllers;

use App\Models\UserModels;

class FileCon extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function addImg()
    {
        $data = [];
        $rules = [

            'image' => [
                'label' => 'Image File',
                'rules' => 'uploaded[image]',
                '|is_image[image]',
                '|mime_in[image , image/jpg , image/jpeg , image/gif , image/png]', '|max_size[file , 1000]',
            ],
        ];
        if ($this->request->getMethod() == "post") {
            if ($this->validate($rules)) {
                $myImg = $this->request->getFile('image');
                $newImgName = $myImg->getRandomName();
                if ($myImg->move(FCPATH . 'img', $newImgName)) {
                    $data_model = new UserModels();
                    $data = [
                        'image' => $newImgName
                    ];
                    $result =  $data_model->SaveImg($data);
                    if ($result) {
                        echo "image save successfully";
                    } else {
                        echo "image save failed";
                    }
                } else {
                    echo 'not ok';
                }
            } else {
                $data['errors'] = $this->validator;
            }
        }
        echo view('admin/file_view', $data);
    }
}
