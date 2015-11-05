<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_Password extends CI_Controller {

/**
   class comments 
 
 */

   public function __construct()
   {
     parent::__construct(); 
       // Your own constructor code
   }

   public function index()
   {
       $this->load->view('reset_password');
   }

}

/* End of file Reset_Password.php */
