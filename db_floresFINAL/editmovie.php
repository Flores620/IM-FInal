<?php
    $id=$_POST['id'];
    $title=$_POST['title'];
    $director=$_POST['director'];
    $year_release=$_POST['year_release'];
    $genre=$_POST['genre'];
    
    $con = mysqli_connect("localhost", "root", "", "floresdb");
    
    $sql = "UPDATE movie SET title='$title', director='$director', year_release='$year_release', genre='$genre' WHERE id=$id";
    $con->query($sql);
    $con->close();
    header("Location:index.php")
?>


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

