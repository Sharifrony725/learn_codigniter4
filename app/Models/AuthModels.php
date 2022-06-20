<?php 
namespace App\Models;

use CodeIgniter\Model;

class AuthModels extends Model 
{
    public function createAccount($data){
        $db = \Config\Database::connect();
        $res = $db->table('auths')->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
        
    }
}
