<?php

function delete($conn,$sql,$header) {
    if ($conn->query($sql) === TRUE) {
        header("Location: ../pre_views/$header");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
}

function searchTerm($array,$conn,$sql){
    $array = [];
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        $array[] = $row;
    }
    return $array;
}