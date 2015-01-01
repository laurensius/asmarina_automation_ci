<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 23 Jul 2013 05:00:00 GMT");
        
        $this->load->model('mod_lampu');
        $this->load->model('mod_user');
        
        
        $this->m_welcome = "<b>Hello World!</b> Selamat datang di administrator area Asmarina's Project. Untuk mengakses area ini diperlukan username dan password. Terima kasih.";
        $this->m_not_match = "<b>Whoopps!</b> Nampaknya kombinasi antara username dan password Anda tidak tepat. Silahkan coba lagi. Terima kasih.";
        $this->m_not_found = "<b>Whoopps!</b> Nampaknya kombinasi antara username dan password Anda tidak terdaftar pada database. Silahkan coba lagi atau hubungi developer. Terima kasih.";
        $this->m_not_login = "<b>Whoopps!</b> Untuk mengakses area ini diperlukan username dan password. Terima kasih.";
        $this->m_logout = "<b>Terima kasih!</b> Anda baru saja keluar dari administrator area Asmarina's Project.";

    }


    public function index(){
        if($this->session->userdata("s_username") && $this->session->userdata("s_password")){
            $content['state_lampu'] =  $this->mod_lampu->load_state();
            $this->load->view('user/header');
            $this->load->view('user/body');
            $this->load->view('user/footer',$content);
        }else{
            $content["message"] = $this->alert("SUCCESS", $this->m_welcome);
            $this->load->view('user/header_not_login');
            $this->load->view('user/body_not_login',$content);            
            $this->load->view('user/footer_not_login');          
        }
    }
    
    public function verifikasi(){
        $u = mysql_real_escape_string($this->input->post('username'));
        $p = mysql_real_escape_string($this->input->post('password'));
        if($u!=null && $p!=null){
            $hasil = $this->mod_user->verifikasi($u,$p);
            if($hasil["message"]=="STATUS_OK"){ 
                $this->buat_session($hasil["username"],$hasil["password"]);
                redirect(site_url().'/user/index', 'refresh');
            }else
            if($hasil["message"]=="STATUS_NOT_MATCH"){ 
                $content["message"] = $this->alert("DANGER", $this->m_not_match);
                $this->load->view('user/header_not_login');
                $this->load->view('user/body_not_login',$content);
                $this->load->view('user/footer_not_login');
            }else
            if($hasil["message"]=="STATUS_NOT_FOUND"){ 
                $content["message"] = $this->alert("DANGER", $this->m_not_found);
                $this->load->view('user/header_not_login');
                $this->load->view('user/body_not_login',$content);
                $this->load->view('user/footer_not_login');
            }
        }
    }
    
    public function buat_session($u,$p){
        $data_session = array(
            "s_username"=>$u,
            "s_password"=>$p
        );
        $this->session->set_userdata($data_session);
    }
    
    public function change(){
        if($this->session->userdata("s_username") && $this->session->userdata("s_password")){
            $id = $this->uri->segment(3);
            $update = array('state'=>$this->uri->segment(4));
            $this->mod_lampu->change($id,$update);
            $data['state_lampu'] =  $this->mod_lampu->load_state();
            $this->load->view('user/header');
            $this->load->view('user/body');
            $this->load->view('user/footer',$data);
        }else{
            $content["message"] = $this->alert("DANGER", $this->m_not_login);
            $this->load->view('user/header_not_login');
            $this->load->view('user/body_not_login',$content);            
            $this->load->view('user/footer_not_login');            
        }
    }
    
    public function voltase(){
        $data['state_lampu'] =  $this->mod_lampu->load_state1();
	$this->load->view('user/voltase',$data);
    }
    
    function alert($type,$message){
        $t = strtolower($type);
        $uri = "user/alert_".$t;  
        $data["message"] = $message;
        return $this->load->view($uri,$data,true);
    }
    
    function logout(){
        if($this->session->userdata("s_username") && $this->session->userdata("s_password")){  
            $this->session->sess_destroy();
            $content["message"] = $this->alert("SUCCESS", $this->m_logout);
            $this->load->view('user/header_not_login');
            $this->load->view('user/body_not_login',$content);
            $this->load->view('user/footer_not_login');
        }else{
            $content["message"] = $this->alert("DANGER", $this->m_not_login);
            $this->load->view('user/header_not_login');
            $this->load->view('user/body_not_login',$content);
            $this->load->view('user/footer_not_login');
        }
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/user.php */