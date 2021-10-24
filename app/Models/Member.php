<?php namespace App\Models;

use CodeIgniter\Model;

    class Member extends Model{
        protected $table = 'Member';
        protected $primaryKey = 'id_card';
        protected $allowedFields = ['id_card', 'name', 'age', 'email','password'];
    }
?>