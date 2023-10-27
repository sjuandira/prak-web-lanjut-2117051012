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
    public function edit($id){
        $kelas= $this->kelasModel->getKelas($id);
        $data =[
            'title'=> 'Edit Kelas',
            'kelas'=> $kelas,
        ];
        return view('edit_kelas', $data);
    }
    public function update($id){
        $key_kelas= $this->kelasModel->getKelas($id);
        
        if($key_kelas['nama_kelas']==$this->request->getVar('nama_kelas')){
            $is_unique = '';
        }
        else{
            $is_unique = '|is_unique[kelas.nama_kelas]';
        }
        if(!$this->validate([
            'nama_kelas' => 'required'.$is_unique,
        ])){
            return redirect()->back()->withInput();
        }

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];
        $result = $this->kelasModel->updateKelas($id,$data);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error','Gagal Menyimpan Data!');
        }
        // return redirect()->to(base_url('/kelas'))
        return redirect()->to(base_url('/kelas'))
        ->with('success', 'Berhasil menghapus data');
        

        // $data=[
        //     'id_kelas'=>$this->request->getVar('kelas'),
        // ];
        // $result=$this->kelasModel->updateKelas($data, $id);

        // $key_kelas = $this->kelasModel->getKelas($id);

        // if($key_kelas['nama_kelas'] == $this->request->getVar('nama_kelas')){
        //     $is_unique = '';
        // }else{
        //     $is_unique = '|is_unique[kelas.nama_kelas]';
        // }

        // // validation
        // if(!$this->validate([

        //     'nama_kelas' => 'required'.$is_unique,
        // ])){
        //     return redirect()->back()->withInput();
        // }

        // $data = [
        //     'nama_kelas' => $this->request->getVar('nama_kelas'),
        // ];
        
        // $result = $this->kelasModel->updateKelas($data,$id);
        // if($result){
        //     return redirect()->back()->withInput()
        //     ->with('error','Gagal Menyimpan Data');
        // }

        // return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id){
        $result= $this->kelasModel->deleteKelas($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/kelas'))
        ->with('success','Berhasil menghapus data');
    }

}
