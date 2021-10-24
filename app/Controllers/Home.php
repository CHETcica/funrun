<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Member;
use App\Models\Category;
use App\Models\Regis;

class Home extends BaseController
{
    public function index(){   
        echo view('templase/header');
        echo view('welcome_message');
        echo view('templase/footer');
    }
    public function register(){
        $Category = new Category();
        $data['Category'] = $Category->orderBy('category_id', 'DESC')->findAll();
        return view('register', $data);
    }
    public function category(){
        $Category = new Category();
        $data['Category'] = $Category->orderBy('category_id', 'DESC')->findAll();
        return view('category', $data);
    }
    public function namelist(){
        $regis = new Regis();
        $member = new Member();
        $dataregis['regis'] = $regis->orderBy('ID', 'DESC')->findAll();

        // $datamember['member'] = $member->where('member')->findOne();
        
        return view('namelist', $dataregis);
    }
    public function save(){
        helper('form');
            $member = new Member();
            $regis = new Regis();
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'age' => $this->request->getVar('age'),
                'id_card' => $this->request->getVar('card_id'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)

            ];
            $data2 = [
                'member' => $this->request->getVar('card_id'),
                'category_run' => $this->request->getVar('name-run')
            ];
            $member->insert($data);
            $regis->insert($data2);
            return redirect()->to('/');
        
    }
}
