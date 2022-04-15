<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
        $this->load->view('dosen/index.php');
        $this->mtl1->id=1;
        $this->mtl1->kode='10211';
        $this->mtl1->nama='Faiz Fikri';
        $this->mtl1->SKS='3';

        $this->load->view('welcome_message');
        $this->load->view('dosen/index.php');
        $this->mtl2->id=2;
        $this->mtl2->kode='20211';
        $this->mtl2->nama='nunu';
        $this->mtl2->SKS='3';
        
        $this->load->view('welcome_message');
        $this->load->view('dosen/index.php');
        $this->mtl3->id=3;
        $this->mtl3->kode='30211';
        $this->mtl3->nama='udin';
        $this->mtl3->SKS='3';
        

        

        $list_mtl = [$this->mtl1, $this->mtl2, $this->mtl3];
        $data['list_mtl']=$list_mtl;
        $this->load->view('index', $data);
	}
}
