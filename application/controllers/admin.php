<?php

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function index(){

          $toplamSoru = $this->admin_model->toplamSoru();
          $viewData["toplamSoru"] = $toplamSoru;
          $onaysizSoru = $this->admin_model->toplamOnaysizSoru();
          $viewData["onaysizSoru"] = $onaysizSoru;
          $toplamUye = $this->admin_model->toplamUye();
          $viewData["toplamUye"] = $toplamUye;
          $this->load->view("yonetim/index",$viewData);
    }

    public function onayliSorular(){
        $rows = $this->admin_model->onayliSoru();
        $viewData["rows"] = $rows;
        $this->load->view("yonetim/onayliSorular",$viewData);
    }

    public function onaysizSorular(){
        $rows = $this->admin_model->onaysizSoru();
        $viewData["rows"] = $rows;
        $this->load->view("yonetim/onaysizSorular",$viewData);
    }

    public function isActiveSetter(){
        $id     = $this->input->post("soru_id");
        $onay   = $this->input->post("soru_onay") == "true" ? 1 : 0;

        $update = $this->db->where("soru_id",$id)->update("soru",array("soru_onay" => $onay));
        echo $update;
    }
}