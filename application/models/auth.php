<?php

/**
 * Author: Evin Weissenberg
 * Date: 2014
 */
class Auth extends CI_Model {

    private $username;
    private $password;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }


    function register($data = array()) {
        //Check to see if username already available

        if ($data['fb'] == TRUE) {


        } else {


        }

    }

    function login() {


        try {

            if (empty($_REQUEST['Username']) || empty($_REQUEST['Password'])) {

                throw new Exception('Username or Password values are missing.');

            } else {

                $Username = $this->db->escape($_REQUEST['Username']);
                $Password = $this->db->escape($_REQUEST['Password']);
                $query = $this->db->query("SELECT username, password, user_type_id FROM users WHERE username=$Username AND password=$Password");
                $row = $query->row();



                if ($row->username == trim($_REQUEST['Username']) AND $row->password == trim($_REQUEST['Password'])) {


                    $userSessionObject = $this->db->query("SELECT * FROM users WHERE username=$Username");

                    if ($userSessionObject->row()=='') {

                        throw new Exception('Session Object is empty');

                    }

                    $_SESSION['data'] = $userSessionObject->row();
                    //print_r($_SESSION);


                    if ($row->user_type_id == '1') {

                        header('location: /admin/dashboard');

                    } elseif ($row->user_type_id == '2') {

                        header('location: /account');

                    }



                } else {

                    throw new Exception('Username and Password did not match.');

                }
            }
        } catch (Exception $e) {

            echo $e->getMessage();
            //echo $e->getFile();
            //echo $e->getLine();

        }
    }

    function isLoggedIn() {


        if (!empty($_SESSION['data'][0]['Username'])) {


            if ($_SESSION['data'][0]['user_type_id'] == 1) {


                header('location: /admin/dashboard');

            } elseif ($_SESSION['user_type_id'] == 2) {


                header('location: /user/dashboard');

            }

        } else {

            //header('location: /');

        }
    }

    function logOut() {

        session_destroy();
        header('location: / ');


    }

    function deactivateUser($username) {

        $Username = $this->db->escape($username);
        $query = $this->db->query("UPDATE Users set IsActive=0 WHERE Username=$Username");
        return TRUE;

    }


}