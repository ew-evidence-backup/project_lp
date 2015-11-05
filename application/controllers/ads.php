<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller {

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
       $this->load->view('ads');
   }

    public function delete()
    {
        $this->db->query("DELETE FROM ads WHERE ad_id = ".$_REQUEST['ad_id']." and id= ".$_SESSION['data']->id."  ");
        header('location:/ads');


    }

}

/* End of file Ads.php */
