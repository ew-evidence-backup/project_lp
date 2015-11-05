<?php

/**
 * @author Evin Weissenberg 2014
 */

// connect to db
$link = @mysql_connect('192.254.253.80', 'econline_loadpop', 'evin337887');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! @mysql_select_db('econline_loadpops') ) {
    die ('Can\'t use econline_loadpops : ' . mysql_error());
}