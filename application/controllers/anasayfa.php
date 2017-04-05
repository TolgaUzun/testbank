<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("main_model");
    }

    public function index(){
        if (!$this->session->oturum){
            redirect(base_url());
        }

        $kgetir = $this->main_model->kategori();
        $dataView["kgetir"] = $kgetir;

        $this->view('anasayfa_view',$dataView);
    }
    public function view($view, $data = null){
        $this->load->view('include/header');
        $this->load->view($view, $data);
        $this->load->view('include/footer');
    }




}
