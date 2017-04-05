<?php
class Main_model extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function add_user($data){
    return $this->db->insert('uye', $data);
  }

  public function login(){
    $sonuc = $this->db
                  ->where("uye_nick",$this->input->post("kadi"))
                  ->where("uye_pass",$this->input->post("pass"))
                  ->get("uye");
    if ($sonuc->num_rows == 1){
      return true;
    }
    return false;
  }

  public function kategori(){
    return $this->db->get("kategori")->result();
  }
}
?>
