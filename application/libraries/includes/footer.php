<!--This is the footer area.-->

<p>&copy; InboxTrivia 2013 | <a href="privacy">Privacy</a></p>

<?php

if (ENVIRONMENT == 'development') {
    echo '<br/>';
    echo '<hr/>';
    echo '<div style="color:green">';
    echo '<h4 style="padding-left:10px;">Development Mode</h4>';
    include 'application/libraries/debug.php';
    (new Debug())->setTitle('Request')->setVariable($_REQUEST)->debug();
    (new Debug())->setTitle('Session')->setVariable($_SESSION)->debug();
    (new Debug())->setTitle('Server')->setVariable($_SERVER)->debug();
    echo '</div>';
}

?>
