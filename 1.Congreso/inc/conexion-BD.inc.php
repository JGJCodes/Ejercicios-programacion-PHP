<?php	

    DEFINE('DB_USER','congreso');
    DEFINE('DB_PASSWORD','iqnova777');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','IQNOVA');

    $dbc =  mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL:' . mysqli_connect_error());

    mysqli_set_charset($dbc, 'utf8');
?>