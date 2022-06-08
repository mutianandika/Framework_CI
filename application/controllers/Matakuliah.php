<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
		
        $this->load->model('Matakuliah/Matakuliah_models','mtl1');
        $this->mtl1->id=1;
        $this->mtl1->kode='10211';
        $this->mtl1->nama='Faiz Fikri';
        $this->mtl1->SKS='3';

        $this->load->model('Matakuliah/Matakuliah_models','mtl2');
        $this->mtl2->id=2;
        $this->mtl2->kode='20211';
        $this->mtl2->nama='nunu';
        $this->mtl2->SKS='3';
        
        $this->load->model('Matakuliah/Matakuliah_models','mtl3');
        $this->mtl3->id=3;
        $this->mtl3->kode='30211';
        $this->mtl3->nama='udin';
        $this->mtl3->SKS='3';
        

        $list_mtl = [$this->mtl1, $this->mtl2, $this->mtl3];
        $data['list_mtl']=$list_mtl;
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        $this->load->view('Matakuliah/matakuliah', $data);
        $this->load->view("layout/footer");
	}
        public function form_matakuliah() {
        $data['judul'] = 'Form Kelola Matakuliah';
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        $this->load->view('matakuliah/form_matakuliah', $data);
        $this->load->view("layout/footer");   
}

        public function save(){
        $this->load->model('Matakuliah/Matakuliah_models', 'mtl1');

        $this->mtl1 -> nama = $this -> input -> post('nama');
        $this->mtl1 -> SKS = $this -> input -> post('SKS');
        $this->mtl1 -> kode = $this -> input -> post('kode');
        
        $data['mtl1']=$this->mtl1;
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        $this->load->view('Matakuliah/view', $data);
        $this->load->view("layout/footer");
}

}
