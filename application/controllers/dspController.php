<?php

class dspController extends CI_Controller {
 
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
   $name = $this->input->post('name');
   $network = $this->input->post('network');
   $dealer_no = $this->input->post('dealer_no');
   $percentage = $this->input->post('percentage');
   $balance = $this->input->post('balance');
   $dss = $this->input->post('dss');
   $dss = trim($dss);
   if($dss != null || $dss != ""){
      $data = array(
               'dsp_name' => trim($name),
               'dss_id' =>$dss,      
               );
   }else{
      $data = array(
               'dsp_name' => trim($name)
               
               );
   }
   $data2 =  array(
                  'network' => $network,
                  'dealer_no' => $dealer_no,
                  'percentage' => $percentage,
                  'balance' => $balance
               );
   $ret = $this->dsp->addDSP($data, $data2);
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