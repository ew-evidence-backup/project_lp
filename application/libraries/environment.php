<?php

/**
 * Author: Evin Weissenberg
 * Date: 2014
 */
class Environment {

    function __construct() {

        if (ENVIRONMENT == 'development') {
            echo '<div style="color:green">';
            echo '<h4 style="padding-left:10px;">Development Mode</h4>';
            echo '</div>';
        }

    }

}