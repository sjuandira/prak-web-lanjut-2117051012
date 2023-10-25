<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $kelasModel;
    protected $helpers = ['form'];
    public function __construct(){
        $this->kelasModel= new KelasModel();
    }
    public function index()
    {
        $data=[
            'title'=>'List Kelas',
            'kelas'=> $this->kelasModel->getKelas(),
        ];
        return view('list_kelas', $data);
    }
    public function create(){
        $data =[
            'title'=>'Create Kelas',            
        ];

        return view('create_kelas', $data);
    }
    public function store(){

        if(!$this->validate([
            'nama_kelas' => 'required|is_unique[kelas.nama_kelas]',            
        ])){
            
            return redirect()->back()->withInput();
        }
        $data =[
            'nama_kelas'=>$this->request->getVar('nama_kelas'),
        ];
        $this->kelasModel->saveKelas($data);

        return redirect() ->to('/kelas');

    }

}
