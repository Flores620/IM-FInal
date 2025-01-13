<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Movie List</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Movie List</h1>
        
        <form action="addmovie.php">
            <input type="text" name="title" placeholder="Movie Title"required>
            <input type="text" name="director" placeholder="Director"required>
            <input type="number" name="year_release" placeholder="Year Realease"required>
            <input type="text" name="genre" placeholder="Genre"required>
            <input type="submit" value="Add Movie">
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Director</th>
                    <th>Year Release</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
            </thead>
        <?php
            $con = mysqli_connect("localhost","root","","floresdb");
            $sql = "SELECT * FROM movie";
            $result = $con->query($sql);
            
            while ($row= mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row ['id']."</td>";
                echo "<td>".$row ['title']."</td>";
                echo "<td>".$row ['director']."</td>";
                echo "<td>".$row ['year_release']."</td>";
                echo "<td>".$row ['genre']."</td>";
                echo "<td>"
                . "<a href='editmovieview.php?id=" . $row['id'] . "'>Edit</a> | 
                   <a href='deletemovie.php?id=" . $row['id'] . "'>Delete</a>"
                        . "</td>";
                echo "</tr>";
            }
            $con->close();
        ?>
    </body>
</html>
