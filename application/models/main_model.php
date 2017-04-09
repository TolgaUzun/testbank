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
    if ($sonuc->num_rows() == 1){
      return $sonuc->result();
    }
    return false;
  }

  public function kategori(){
    return $this->db->get("kategori")->result();
  }

  public function add_soru($data){
    return $this->db->insert("soru",$data);
  }

  public function soru(){
    $sonuc = $this->db
                  ->join('kategori', 'kategori.kategori_id = soru.soru_kategori')
                  ->where('kategori.kategori_id', $this->input->post("kategori"))
                  ->order_by("soru_id","RANDOM")
                  ->limit($this->input->post("soruSayisi"))
                  ->get("soru")->result();

    return $sonuc;
  }
}
?>
