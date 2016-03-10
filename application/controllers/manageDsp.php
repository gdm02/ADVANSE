<?php

class manageDsp extends CI_Controller {
 
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
   $data['dss'] = $this->dss->getAllDSS();
   $this->load->view('templates/header');
   $this->load->view('DSPPanel', $data);
   $this->load->view('templates/footer');
 }
 
 function addDSP()
 {
   $data['dss'] = $this->dss->getAllDSS();
   $this->load->view('templates/header');
   $this->load->view('adddsp', $data);
   $this->load->view('templates/footer');
 }


 function editDSP()
 {
   $data['dss'] = $this->dss->getAllDSS();
   $this->load->view('templates/header');
   $this->load->view('editdsp', $data);
   $this->load->view('templates/footer');
 }

 function deleteDSP()
 {

 }

 function assignDSStoDSP()
 {

 }


 
}
 
?>