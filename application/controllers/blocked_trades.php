<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blocked_trades extends CI_Controller {

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
        $this->load->view('blockedtrades');
    }

}

/* End of file Api_Docs.php */
