<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campaign_Edit extends CI_Controller {

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
       $this->load->view('campaign_edit');
   }

}

/* End of file Campaign_Edit.php */
