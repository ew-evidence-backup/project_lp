<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campaigns extends CI_Controller {

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
       $this->load->view('campaigns');
   }

    function delete(){

        $this->db->query("UPDATE campaigns set activate=0 WHERE campaign_id=".$_REQUEST['campaign_id']." ");
        header('location:/campaigns');
        exit();

    }



}

/* End of file Campaigns.php */
