<?php

class dssController extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
   $this->load->model('dsp','',TRUE);
   $this->load->model('dss','',TRUE);
   if(!($this->session->userdata('logged_in') == true)){
      $this->load->view('errors/index');
   }
 }

 function index(){
   $this->load->view('templates/header');
   $this->load->view('DSSPanel');
   $this->load->view('templates/footer');
 }
 
 function addDSS()
 {
   $name = $this->input->post('dss_name');
   $data = array(
         'dss_name' => trim($name), 
         );

   if($ret == false){
      return "Error has occured.";
   }else{
      return "Added successfully.";
   }
 }

 function editDSP()
 {

 }

 function deleteDSP()
 {

 }

 function assignDSStoDSP()
 {

 }


 
}
 
?>