<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Make_Transaction extends CI_Controller {

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
       $this->load->view('make_transaction');
   }

}

/* End of file Make_Transaction.php */
