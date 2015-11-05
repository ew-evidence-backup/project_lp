<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_Zones extends CI_Controller {

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
       $this->load->view('ad_zones');
   }

}

/* End of file Ad_Zones.php */
