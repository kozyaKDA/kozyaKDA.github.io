<?php
    /* mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); */
    $connectionDb = mysqli_connect("localhost","root","","languages");

    if ($connectionDb == false){
        echo "Ошибка подключения к базе";
    }
    
    $array = array();

    $sql_select = "SELECT * from `list-data`";

    $result = mysqli_query($connectionDb, $sql_select);
    

    while($row = mysqli_fetch_assoc($result)){
        $array[] = $row;
    }

?>