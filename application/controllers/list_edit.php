<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class list_edit extends CI_Controller {

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
        $this->load->view('list_edit');
    }

}

/* End of file Faq.php */
