<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_Notifications extends CI_Controller {

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
       $this->load->view('email_notifications');
   }

}

/* End of file Email_Notifications.php */
