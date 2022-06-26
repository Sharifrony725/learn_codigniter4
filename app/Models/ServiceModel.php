<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{

    public function add_service_type($data)
    {
        $db = \Config\Database::connect();
        $create =  $db->table('service_type');
        $result =  $create->insert($data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getData(){
        $db = \Config\Database::connect();
        $result = $db->query("SELECT * FROM `service_type`");
        $data = $result->getResult();
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }
}
