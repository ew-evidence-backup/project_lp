<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_Options_Edit extends CI_Controller {

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
        $this->load->view('payment_options_edit');
    }


}

/* End of file Payment_Options.php */
