<?php
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "floresdb");
    
    $sql = "DELETE FROM movie WHERE id = $id";
    $con->query($sql);
    $con->close();
    header("location:index.php");

?>


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

