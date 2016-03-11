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

 function addDSS()
 {
   $this->load->library('form_validation');

   $this->form_validation->set_rules('full_name', 'Name', 'trim|required');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.
     $data['page'] = "adddss";
     $this->load->view('templates/header', $data);
     $this->load->view('adddss');
     $this->load->view('templates/footer');
   }
   else
   {
     $name = $this->input->post('full_name');
     $data = array(
              'dss_name' => $name,  
              );

     $ret = $this->dss->addDSS($data);
     if($ret === false){
         $this->session->set_flashdata('message', 'Error has occured.');
     }else{
         $this->session->set_flashdata('message', 'Added Successfully.');
     }
    redirect('/landingController/addDSS');
   }
 }



 
}
 
?>