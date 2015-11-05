<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lists extends CI_Controller {

    /**
     * class comments

     */

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function index() {
        $this->load->view('lists');
    }


    function delete() {
        $this->db->query("DELETE FROM lists WHERE list_id = " . $_REQUEST['list_id'] . " and id= " . $_SESSION['data']->id . "  ");
        header('location:/lists');


    }


}


/* End of file List.php */
