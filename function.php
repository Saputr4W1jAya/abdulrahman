<?php
$db = mysqli_connect("localhost", "rddmcans_wp91", "S1sp8[@6S3", "rddmcans_wp91");

function judul($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
