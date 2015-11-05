<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campaign_New extends CI_Controller {

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
        $this->load->view('campaign_new');
    }



}

/* End of file Campaigns.php */
