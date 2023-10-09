<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\KelasModel;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUsers(),
        ];

        return view('list_user', $data);
    }

    public function profile($nama = '', $kelas = '', $npm = '')
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];

        return view('profile', $data);
    }

    public function create(){


        $kelas = $this->kelasModel->getKelas();

        session();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()
        ];
        return view('create_user', $data);
    }

    public function store()
    {
       
        $path = 'assets/uploads/img/' ;

        $foto = $this->request->getFile('foto');
        
        $name = $foto->getRandomName();
        

        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        if(!$this->validate([
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => '{field} NPM harus diisi',
                    'is_unique' => '{field} NPM sudah ada'
             ]
           ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'foto' => $foto
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas'),
        ];

       

        //return view('profile', $data);
        return redirect()->to('/user');
    }


    public function show($id){
        $user = $this->userModel->getUsers($id);

        $data = [
            'title'  => 'Profile',
            'user'      => $user,
        ];

        return view('profile', $data);
    }
}
