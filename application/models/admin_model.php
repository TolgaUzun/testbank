<?php

class Admin_model extends CI_Model{
    public function toplamSoru(){
        return $this->db->get("soru")->num_rows();
    }
    public function toplamOnaysizSoru(){
        return $this->db->where("soru_onay",0)->get("soru")->num_rows();
    }
    public function toplamUye(){
        return $this->db->get("uye")->num_rows();
    }
    public function onayliSoru(){
        return $this->db
            ->join("kategori","kategori.kategori_id=soru.soru_kategori")
            ->where("soru.soru_onay",1)
            ->get("soru")
            ->result();
    }

    public function onaysizSoru(){
        return $this->db
            ->join("kategori","kategori.kategori_id=soru.soru_kategori")
            ->where("soru.soru_onay",0)
            ->get("soru")
            ->result();
    }
}