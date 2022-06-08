<?php
class Dashboard extends CI_Controller{
    
    public function index(){
        $this->load->view("layout/header");
        $this->load->view("layout/sidebar");
        
            $data ['nama'] = "CodeIgneter 3";
            $this->load->view("dashboard/dash", $data);
        
            $this->load->view("dashboard/add");
        
        $this->load->view("layout/footer");
    }
}
?>