<?php
    ob_start();
    session_start();
?>
<?php

//add the following in database in the responed of feedback

    echo $_SESSION["enrollment"];
    echo $_SESSION["department"];


?>
<?php
    ob_end_flush();
?>