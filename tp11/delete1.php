<?php

include("config2.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);

    if( $dewan1 ){
        header('Location: index.php?status=success');
    } else {
        header('Location: index.php?status=failed');
    }

} else {
    die("akses dilarang...");
}

?>