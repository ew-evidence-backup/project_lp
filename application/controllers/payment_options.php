<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_Options extends CI_Controller {

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
       $this->load->view('payment_options');
   }

    function delete(){


        include('application/views/config.php');
        $payment_option_id = (int) $_GET['payment_option_id'];
        mysql_query("DELETE FROM `payment_options` WHERE `payment_option_id` = '$payment_option_id' ") ;
        header('location: /payment_options');
        exit();

    }


}

/* End of file Payment_Options.php */
