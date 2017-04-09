<?php

class Soru extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("main_model");
    }

    public function index(){

        if (!$this->session->oturum){
            redirect(base_url("anasayfa"));
        }

        $rows = $this->main_model->soru();

        $viewData["rows"] = $rows;

        $this->view('soru_view' , $viewData);
    }
    public function view($view, $data = null){
        $this->load->view('include/header');
        $this->load->view($view, $data);
        $this->load->view('include/footer');
    }

    public function yanitla(){
        if ($_POST)
        {
            @$cevap = $this->input->post("soru".$row->soru_id);
            if ($row["soru_true"] == $cevap) {
                $dogru = $dogru+1;
                $alert = "alert-success";

            }else if($cevap == ""){
                $bos = $bos+1;
                $alert = "alert-warning";

            }else{
                $yanlis = $yanlis+1;
                $alert = "alert-danger";
                if ($row["soru_true"] == $cevap){

                    $dogruYanit = "text-success";
                }

            }
        }
    }
}