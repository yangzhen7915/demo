<?php
    $data = file_get_contents("../data/nav.json");
    echo json_decode($data);
    
?>