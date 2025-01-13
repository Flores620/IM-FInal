<?php  

    $title = $_GET['title'];
    $director = $_GET['director'];
    $year_release = $_GET['year_release'];
    $genre = $_GET['genre'];


    $con = mysqli_connect("localhost", "root", "", "floresdb");

    $sql = "INSERT INTO movie VALUES (0, '$title', '$director', '$year_release', '$genre')";
    $con->query($sql);
    $con->close();
    
    header("location:index.php");
?>

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

