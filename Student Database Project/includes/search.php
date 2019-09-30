<?php
include_once 'dbh.inc.php';

$student_name = $_POST["student_name"];
$student_id = $_POST["student_id"];

if(isset($_POST["search"])) {
    $series = $_POST["series"];

    switch ($series) {
        case 14:
            $series = 14;
            break;
        case 15:
            $series = 15;
            break;
        case 16:
            $series = 16;
            break;
        case 17:
            $series = 17;
            break;
        default:
            # code...
            break;
    }
}

if(isset($_POST["search"])) {
    $department = $_POST["department"];

    switch ($department) {
        case 'eee':
            $department = 02;
            break;
        case 'cse':
            $department = 03;
            break;
        case 'ece':
            $department = 10;
            break;
        case 'ce':
            $department = 00;
            break;
        case 'me':
            $department = 01;
            break;
        default:
            # code...
            break;
    }
}

$sql1 = "SELECT * FROM student WHERE student.student_id LIKE '%$student_id%';" ;
$sql2 = "SELECT * FROM student WHERE student.student_name LIKE '%$student_name%';" ;
$sql3 = "SELECT * FROM student WHERE student.department_id = $department;" ;
$sql4 = "SELECT * FROM student WHERE student.series = '$series';" ;


if(!empty($student_id)) {
    $sql = $sql1;
}

if(!empty($student_name)) {
    $sql = $sql2;
}

if(!empty($department)) {
    $sql = $sql3;
}

if(!empty($series)) {
    $sql = $sql4;
}

if(!empty($student_id) && !empty($student_name)) {
    $sql = "SELECT * 
            FROM student 
            WHERE student.student_id LIKE '%$student_id%'
            AND student.student_name LIKE '%$student_name%';";
}

if(!empty($student_id) && !empty($department)) {
    $sql = "SELECT * 
            FROM student 
            WHERE student.student_id LIKE '%$student_id%'
            AND student.department_id = $department;";
}

if(!empty($student_id) && !empty($series)) {
    $sql = "SELECT * 
            FROM student 
            WHERE student.student_id LIKE '%$student_id%'
            AND student.series = $series;";
}

if(!empty($student_name) && !empty($series)) {
    $sql = "SELECT * 
            FROM student 
            WHERE student.student_name LIKE '%$student_name%'
            AND student.series = $series;";
}

if(!empty($student_name) && !empty($department)) {
    $sql = "SELECT * 
            FROM student 
            WHERE student.student_name LIKE '%$student_name%'
            AND student.department_id = $department;";
}

if(!empty($department) && !empty($series)) {
    $sql = "SELECT * 
            FROM student 
            WHERE student.department_id = $department
            AND student.series = $series;";
}

if(!empty($student_name) && !empty($department) && !empty($series)) {
    $sql = "SELECT * 
            FROM student 
            WHERE student.student_name LIKE '%$student_name%'
            AND student.department_id = $department
            AND student.series = $series;";
}

if(empty($student_id) && empty($student_name) && empty($department) && empty($series)) {
    $sql = "SELECT * 
            FROM student";
}

$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../style.css">
        <title>Document</title>
    </head>
    <body>
        <h1>Search Result</h1>

        <div class="form_container">
            <form action="search.php" method="post">
                <div class="input_container">
                    <input type="text" name="student_name" id="text_input" placeholder= "Search by name">
                    <input type="number" name="student_id" id="number_input" placeholder= "Search by ID">
                    <select name="department" id="department">
                        <option value="">Choose Department</option>
                        <option value="eee">EEE</option>
                        <option value="cse">CSE</option>
                        <option value="ece">ECE</option>
                        <option value="ce">CE</option>
                        <option value="me">ME</option>
                    </select>
                    <select name="series" id="series">
                        <option value="">Choose Series</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                    </select>
                </div>
                
                <div class="btn_container">
                    <button type= "submit" name="search">Search</button>
                </div>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>student_id</th>
                    <th>student_name</th>
                    <th>department_id</th>
                    <th>series</th>
                </tr>
            </thead>
            
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>". $row['student_id']. "</td> <td>". $row['student_name']. "</td> <td>". $row['department_id']. "</td> <td>". $row['series']. "</td> </tr>";
                }
            ?>
            
        </table>
    </body>
</html>