<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Device extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mod_lampu');
    }

    public function index(){
        $data["state_lampu"] = $this->mod_lampu->load_state();
        $this->load->view('device/body',$data);
    }
    
    public function get_response(){ 
        $response = $this->input->post('sensor_value');
        $data = array("response"=>$response);
        $this->mod_lampu->get_response("1",$data);
    }
}

/* End of file device.php */
/* Location: ./application/controllers/device.php */