<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    public function getData()
    {
        $db = \Config\Database::connect();
        $result = $db->query("SELECT * FROM `users`");
        $data = $result->getResult();
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }
    public function addData($data){
        $db = \Config\Database::connect();
        $create =  $db->table('users');
        $res =  $create->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
}
