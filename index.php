<?php
    require('./includes/scope.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 30%;
        margin: 20px auto;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }

        td {
        text-align: center;
        }

        .box {
          width: 30%;  
          margin: auto;
          padding: 20px;
          overflow: auto;
          text-align: justify;
        }
    </style>
    <title>Scope Resolution Operator</title>
</head>
<body>
    
    

    <?php
        $student = new Course('PHP', 'Rap Raquion');
        echo "<table>";
            echo "<caption>Info</caption>";
            echo "<tr>";
                echo "<td>Name</td>";
                echo "<td>" . $student->getName() . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Course</td>";
                echo "<td>" . $student->getCourse() . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Mentor</td>";
                echo "<td>" . $student->getMentor() . "</td>";
            echo "</tr>";
        echo "</table>";

        echo "<div class='alert alert-info box'>";
        echo $student->setBatch("2")->setOfficeHrs("0900H - 1800H")->setEmail("raphael.raquion@boom.camp")->setContact("09123456789")->getInfo();
        echo "</div>";
        
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>