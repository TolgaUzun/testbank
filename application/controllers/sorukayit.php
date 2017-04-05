<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sorukayit extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
    }

    public function index()
    {
        $kategori = $this->main_model->kategori();
        $dataView["kategori"] = $kategori;
        $this->view('soruKayit_view',$dataView);
    }

    public function view($view, $data = null)
    {
        $this->load->view('include/header');
        $this->load->view($view, $data);
        $this->load->view('include/footer');
    }

    public function insert(){
        $data = array(
            "soru_kategori" =>  $this->input->post("kategori"),
            "soru_text"     =>  $this->input->post("soru"),
            "soru_a"        =>  $this->input->post("a"),
            "soru_b"        =>  $this->input->post("b"),
            "soru_c"        =>  $this->input->post("c"),
            "soru_d"        =>  $this->input->post("d"),
            "soru_true"     =>  $this->input->post("dogru")
        );

        if($this->main_model->add_soru($data)){
            $data = array('msg' => '<b>Soru Gönderme Başarılı...</b> Yeniden Soru Eklemek İçin <a href="'.base_url("sorukayit").'">Tıklayın</a>');
        }
        else {
            $data = array('msg' => 'Hata oluştu');
        }
        $this->view('soruKayit_view', $data);


    }
}