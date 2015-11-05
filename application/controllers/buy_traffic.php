<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buy_Traffic extends CI_Controller {

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
       $this->load->view('buy_traffic');
   }

}

/* End of file Buy_Traffic.php */
