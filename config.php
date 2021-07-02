<?php

    $conn = mysqli_connect("localhost","root","","hungryhub");
    $config = mysqli_select_db($conn,"hungryhub");

    if($config)
    {
        // echo "Database Connected...";
    }

?>