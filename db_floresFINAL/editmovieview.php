<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
<?php
      $id=$_GET['id'];
      $connection = mysqli_connect ("localhost","root","","floresdb");
      
      $sql = "SELECT * FROM movie WHERE id = $id";
      
      $result = $connection->query($sql);
      
      $row = mysqli_fetch_assoc($result);
 ?>     <form action="editmovie.php" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>">
            <input type="text" name="title" placeholder="Movie Title" value="<?php echo $row['title']; ?>" required>
            <input type="text" name="director" placeholder="Director" value="<?php echo $row['director']; ?>" required>
            <input type="number" name="year_release" placeholder="Year Realease" value="<?php echo $row['year_release']; ?>" required>
            <input type="text" name="genre" placeholder="Genre" value="<?php echo $row['genre']; ?>" required>
            <input type="submit" value="Edit">
        </form>
        
    </body
</html>

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

