<?php

/**
 * Author: Evin Weissenberg
 * Date: 2014
 */
class Points extends CI_Model {


    function addQuestion($questionID, $duration) {

        //Logic to add duration point
        if ($duration > 10) {

            $point = 1;

            return $point + 1;

        }

        try {

            $this->db->query("INSERT into Points (UserID,PointTypeID,Value,CategoryID) values ('" . $_SESSION['data'][0]['UserID'] . "','" . $_REQUEST['PointTypeID'] . "','" . $_REQUEST['PointValue'] . "','" . $_REQUEST['CategoryID'] . "')");

            if ($this->db->affected_rows() == FALSE) {

                log_message('Points', 'Point failed to add.');
                throw new Exception('Point was not added, due to an error.');

            }

        } catch (Exception $e) {

            echo $e->getMessage();

        }
    }

    function addQuestionSubmission() {

        $this->db->query("");

        try {

            if ($this->db->affected_rows() == FALSE) {

                throw new Exception('Failed');
            }

        } catch (Exception $e) {


        }
    }


    function addReferral($count) {

        $this->db->query("");

        try {

            if ($this->db->affected_rows() == FALSE) {

                throw new Exception('Failed');
            }

        } catch (Exception $e) {


        }


    }


}