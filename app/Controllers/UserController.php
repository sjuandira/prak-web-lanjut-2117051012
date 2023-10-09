<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{   
    public $userModel;
    public $kelasModel;
    protected $helpers = ['form'];

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    public function index()
    {        
        $data=[
            'title'=>'List User',
            'users'=> $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
    public function profile($nama="",$kelas="", $npm="")
    {
        
        $data=[            
            'nama'=>$nama,
            'kelas'=> $kelas,
            'npm'=>$npm,
        ];
        return view('profile', $data);
    }
    public function create(){        
        $kelasModel= new KelasModel();

        $kelas = $this->kelasModel->getKelas();

        // [
        //     [
        //         'id' => 1,
        //         'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C'
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D'
        //     ]
        
        // ];

        $data =[
            'title'=>'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
    public function store(){
        $path = 'assets/uploads/img/';
        $foto =$this->request->getFile('foto');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto= base_url($path . '/' . $name);
        }
        $kelasModel = new KelasModel();
        if($this->request->getVar('kelas') != ''){
            $kelas_select = $kelasModel->where('id', $this->request->getVar('kelas'))->first();
            $nama_kelas = $kelas_select['nama_kelas'];
        }else{
            $nama_kelas = '';
        }

        if(!$this->validate([
            'nama' => 'required|alpha_space',
            'npm' => 'required|is_unique[user.npm]|integer|min_length[10]',
            'kelas' => 'required'
        ])){

            session()->setFlashdata('nama_kelas');
            return redirect()->back()->withInput()->with('nama_kelas', $nama_kelas);
        }

        $userModel = new UserModel();
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas'),
            'foto'  =>$foto
        ]);

        $data=[
            'title'=>'Profile User',
            'nama'=>$this->request->getVar('nama'),
            'kelas'=>$nama_kelas,
            'npm'=>$this->request->getVar('npm'),
        ];
        return redirect()->to('/user');
    }
    public function show($id){
        $user = $this->userModel->getUser($id);
        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];
        return view('profile', $data);
    }
}
