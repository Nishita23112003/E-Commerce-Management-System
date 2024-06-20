<?php

include('config/dbcon.php');
function getAll($table)
{
    global $con;
    $query="SELECT * FROM $table";
    return $query_run =mysqli_query($con, $query);
}

function getByID($table, $Cat_Id)
{
    global $con;
    $query="SELECT * FROM $table WHERE Cat_Id='$Cat_Id'";
    return $query_run=mysqli_query($con, $query);
}
function redirect($url,$message)
{
    $_SESSION['message']= $message;
    header(('location: ' .$url));
    exit();
}
?>