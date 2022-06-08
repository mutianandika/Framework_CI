<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller
{

    public function index()
    {


        $this->load->model('Mahasiswa/Mahasiswa_models', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '010001';
        $this->mhs1->nama = 'Faiz Fikri';
        $this->mhs1->gender = 'L';
        $this->mhs1->prodi = 'SI';
        $this->mhs1->ipk = 3.85;

        $this->load->model('Mahasiswa/Mahasiswa_models', 'mhs2');

        $this->mhs2->id = 2;
        $this->mhs2->nim = '453423';
        $this->mhs2->nama = 'Budi Setiawan';
        $this->mhs2->gender = 'L';
        $this->mhs2->prodi = 'TI';
        $this->mhs2->ipk = 3.65;

        $list_mahasiswa = [$this->mhs1, $this->mhs2];
        $data['list_mahasiswa'] = $list_mahasiswa;
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        $this->load->view('Mahasiswa/mahasiswa', $data);
        $this->load->view("layout/footer");
    }
    public function create() {
        $data['judul'] = 'Form Kelola Mahasiswa';
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        $this->load->view('Mahasiswa/create', $data);
        $this->load->view("layout/footer");   
    }
    public function save(){
        $this->load->model('Mahasiswa/Mahasiswa_models', 'mhs1');

        $this->mhs1 -> nim = $this -> input -> post('nim');
        $this->mhs1 -> nama = $this -> input -> post('nama');
        $this->mhs1 -> gender = $this -> input -> post('gender');
        $this->mhs1 -> tmp_lahir = $this -> input -> post('tmp_lahir');
        $this->mhs1 -> tgl_lahir = $this -> input -> post('tgl_lahir');
        $this->mhs1 -> prodi = $this -> input -> post('prodi');
        $this->mhs1 -> ipk = $this -> input -> post('ipk');

        // die(print_r($this->mhs1));
        $data['mhs1']=$this->mhs1;
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        $this->load->view('Mahasiswa/view', $data);
        $this->load->view("layout/footer");
    }
}
