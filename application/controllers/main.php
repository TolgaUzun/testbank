<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("main_model");
    }

    public function index(){

        if ($this->session->oturum){
            redirect(base_url("anasayfa"));
        }
        $this->view('main_view');
    }
    public function view($view, $data = null){
        $this->load->view('include/header');
        $this->load->view($view, $data);
        $this->load->view('include/footer');
    }
    //Giriş İşlemi
    public function login(){

        $giris = $this->main_model->login();

        if ($giris){
            $data = array(
                "nick"      => $this->input->post("kadi"),
                "oturum"    => true,
                "id"        => $giris[0] -> uye_id
            );
            $this->session->set_userdata($data);
            redirect(base_url("anasayfa"));
        }else{
            $data = array('baslik' => 'Hata');
            $this->view("main_view",$data);

        }

    }
    //Çıkış İşlemi
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
