<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_Lampu extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }
    
    function load_state(){
        $query = $this->db->query("select * from t_lampu");
        return $query->result();
    }
    
    function load_state1(){
        $query = $this->db->query("select * from t_lampu where id='1'");
        return $query->result();
    }
    
    
    function change($id,$data){
        $this->db->where('id', $id);
        $this->db->update('t_lampu', $data);    
    }
    
    function get_response($id,$data){
        $this->db->where('id', $id);
        $this->db->update('t_lampu', $data);    
    }
     
}
