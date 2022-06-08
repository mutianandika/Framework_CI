<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
        $this->load->model('Dosen/Dosen_models', 'dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='010211';
        $this->dsn1->nama='Faiz Fikri';
        $this->dsn1->gender='L';
        $this->dsn1->Pendidikan='S2';

        $this->load->model('Dosen/Dosen_models', 'dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='020211';
        $this->dsn2->nama='Saipul';
        $this->dsn2->gender='L';
        $this->dsn2->Pendidikan='S2';

        $this->load->model('Dosen/Dosen_models','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn='030211';
        $this->dsn3->nama='Annisa';
        $this->dsn3->gender='p';
        $this->dsn3->Pendidikan='S2';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        $this->load->view('Dosen/dosen', $data);
        $this->load->view("layout/footer");
        }

        public function form_dosen() {
                $data['judul'] = 'Form Kelola Dosen';
                $this->load->view("layout/header");
                $this->load->view("layout/sidebar");
                $this->load->view('Dosen/form_dosen', $data);
                $this->load->view("layout/footer");   
        }

        public function save(){
                $this->load->model('Dosen/Dosen_models', 'dns1');
        
                $this->dns1 -> nidn = $this -> input -> post('nidn');
                $this->dns1 -> nama = $this -> input -> post('nama');
                $this->dns1 -> gender = $this -> input -> post('gender');
                $this->dns1 -> pendidikan = $this -> input -> post('pendidikan');
                
                $data['dns1']=$this->dns1;
                $this->load->view("layout/header");
                $this->load->view("layout/sidebar");
                $this->load->view('Dosen/view', $data);
                $this->load->view("layout/footer");
        }
}