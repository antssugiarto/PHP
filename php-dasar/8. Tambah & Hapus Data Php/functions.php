<?php
$connection = mysqli_connect("localhost", "root", "", "universitas");

function show($query)
{
    global $connection;
    $result = mysqli_query($connection, $query);
    $array = [];
    while ($element = mysqli_fetch_assoc($result)) {
        $array[] = $element;
    };
    return $array;
};

function add($query)
{
    global $connection;
    mysqli_query($connection, $query);
    return mysqli_affected_rows(($connection));
}

function delete($query)
{
    global $connection;
    mysqli_query($connection, $query);
    return mysqli_affected_rows(($connection));
}
