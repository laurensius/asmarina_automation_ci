<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_User extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }
    
    function verifikasi($u,$p){
        $query = $this->db->query("select * from t_user where username='$u'");
        $data = array();
        if($query->num_rows()>0){
            foreach ($query->result() as $row){
                if(md5($row->password) == md5($p)){
                    $data["message"] = "STATUS_OK";
                    $data["username"] = $row->username;
                    $data["password"] = $row->password;
                }else{
                    $data["message"] = "STATUS_NOT_MATCH";
                    $data["username"] = "";
                    $data["password"] = "";
                }
            }
        }else
        if($query->num_rows()==0){
            $data["message"] = "STATUS_NOT_FOUND";
            $data["username"] = "";
            $data["password"] = "";
        }
        return $data;
    }
    
}
