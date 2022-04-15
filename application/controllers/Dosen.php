<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
        $this->load->view('dosen/index.php');
        $this->dsn1->id=1;
        $this->dsn1->nidn='010211';
        $this->dsn1->nama='Faiz Fikri';
        $this->dsn1->gender='L';
        $this->dsn1->Pendidikan='S2';

        $this->load->view('dosen/index.php');
        $this->dsn2->id=3;
        $this->dsn2->nidn='020211';
        $this->dsn2->nama='Saipul';
        $this->dsn2->gender='L';
        $this->dsn2->Pendidikan='S2';

        $this->load->view('dosen/index.php');
        $this->dsn3->id=2;
        $this->dsn3->nidn='030211';
        $this->dsn3->nama='Annisa';
        $this->dsn3->gender='p';
        $this->dsn3->Pendidikan='S2';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        $this->load->view('index', $data);
	}
}
