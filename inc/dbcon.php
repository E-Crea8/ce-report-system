<?php
 $dbc = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($dbc, 'ce_report_system' ) or die(mysqli_error($dbc));
?>