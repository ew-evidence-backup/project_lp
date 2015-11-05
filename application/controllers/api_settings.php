<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_Settings extends CI_Controller {

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
       $this->load->view('api_settings');
   }

}

/* End of file Api_Settings.php */
