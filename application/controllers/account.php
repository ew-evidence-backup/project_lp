<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

    /**
     * class comments

     */

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function index() {
        $this->load->view('account');
    }

    public function close() {

        echo 'Are you sure?';


        /**
         * @todo create for sure page before you get here!
         */

        if(1==0){

            $this->db->query("UPDATE users set is_active=0  WHERE user_id='" . $_SESSION['data']->id . "'");
            session_destroy();
            header('location:/');

        }


    }
}
/* End of file Account.php */
