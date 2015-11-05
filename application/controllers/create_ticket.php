<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_Ticket extends CI_Controller {

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
       $this->load->view('create_ticket');
   }

}

/* End of file Create_Ticket.php */
