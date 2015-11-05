<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class graph_line extends CI_Controller {

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
        $this->load->view('graph_line');
    }

}

/* End of file Faq.php */
