<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('main_model');
  }

  public function index(){
  	$this->view('signin_view');
  }
  public function view($view, $data = null){
  	$this->load->view('include/header');
  	$this->load->view($view, $data);
  	$this->load->view('include/footer');
  }

  public function sign(){
    if($this->input->post('pass')!= $this->input->post('tpass')){
      echo "<script>alert('Şifreniz uyuşmuyor')</script>";
    }
    else{
      $data = array(
        'uye_adsoyad' =>  $this->input->post('ad'). ' '. $this->input->post('soyad'),
        'uye_mail'    =>  $this->input->post('mail'),
        'uye_nick'    =>  $this->input->post('nick'),
        'uye_pass'    =>  $this->input->post('pass')
      );
      if($this->main_model->add_user($data)){
        $data = array('msg' => '<b>Kayıt başarılı...</b> Giriş Yapmak İçin <a href="'.base_url().'main">Tıklayın</a>');
      }
      else {
        $data = array('msg' => 'Hata oluştu');
      }
      $this->view('signin_view', $data);
    }
  }


}
