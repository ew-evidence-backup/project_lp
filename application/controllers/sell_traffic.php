<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sell_Traffic extends CI_Controller {

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
       $this->load->view('sell_traffic');
   }

}

/* End of file Sell_Traffic.php */
