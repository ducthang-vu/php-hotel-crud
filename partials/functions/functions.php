<?php

// GET ALL RECORDS FROM A DB TABLE
function getAll($conn, $table) {
    $sql = "SeELECT * FROM `$table`";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $records = [];
        while($row = $result->fetch_assoc()) {
            $records[] = $row;
        }
    } elseif ($result) {
        $recors = [];
    } else {
        $records = false;
    }

    $conn->close();

    return $records;
}


function getById($conn, $table, $id) {
    $sql = "SeELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $record = $result->fetch_assoc(); 
    } elseif ($result) {
        $record = [];
    } else {
        $record = false;
    }

    $conn->close();

    return $record;
}


function removeById($conn, $table, $id, $url) {
    $sql = "DELETE FROM `$table`
            WHERE `id` = $id";
    $result = $conn->query($sql);

    if ($result && $conn->affected_rows > 0) {
        header("Location: $url");
    } else if ($result) {
        die('No room found');
    } else {
        die('ERROR');
    }

    $conn->close();
}