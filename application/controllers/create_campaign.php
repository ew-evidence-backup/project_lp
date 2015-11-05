<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_Campaign extends CI_Controller {

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
       $this->load->view('create_campaign');
   }

    function post(){

        print_r('<pre>');
        print_r($_REQUEST);

        /**
         * todo: sanitize data
         */

        $traffic_sources = implode(",", $_REQUEST['traffic_sources']);
        $geo_sources = implode(",", $_REQUEST['geo_sources']);

        $is_auto_renewel = ($_REQUEST['autorenewal']=='on'?1:0);

        $data = array(

            'delivery_method_id'=>$_REQUEST['delivery_method'],
            'title'=>$_REQUEST['campaign_title'],
            'start_date'=>$_REQUEST['start_date'],
            'cpv_bid'=>$_REQUEST['cpv_bid'],
            'cost'=>$_REQUEST['campaign_cost'],
            'traffic_order'=>$_REQUEST['traffic_order'],
            'is_auto_renewed'=>$is_auto_renewel,
            'renewel_amount'=>$_REQUEST['renewal_amount'],
            'lower_amount'=>$_REQUEST['lower_amount'],
            'activate'=>$_REQUEST['activate'],
            'traffic_sources'=>$traffic_sources,
            'geo_sources'=>$geo_sources,

        );

        $query = $this->db->insert('campaigns',$data);

//        if($query == 1){
//
//            header('location: /campaigns');
//
//        }else{
//
//            return false;
//
//        }

    }

}

/* End of file Create_Campaign.php */
