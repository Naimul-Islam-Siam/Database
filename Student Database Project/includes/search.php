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
            $department = '02';
            break;
        case 'cse':
            $department = '03';
            break;
        case 'ece':
            $department = '10';
            break;
        case 'ce':
            $department = '00';
            break;
        case 'me':
            $department = '01';
            break;
        default:
            # code...
            break;
    }
}

$sql1 = "SELECT student_id, student_name, department_name, series
        FROM student, department
        WHERE student.department_id = department.department_id 
        AND student.student_id LIKE '%$student_id%';" ;

$sql2 = "SELECT student_id, student_name, department_name, series
        FROM student, department
        WHERE student.department_id = department.department_id
        AND student.student_name LIKE '%$student_name%';" ;

$sql3 = "SELECT student_id, student_name, department_name, series
        FROM student, department
        WHERE student.department_id = department.department_id 
        AND student.department_id = $department;" ;

$sql4 = "SELECT student_id, student_name, department_name, series
        FROM student, department
        WHERE student.department_id = department.department_id
        AND student.series = '$series';" ;


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
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id
            AND student.student_id LIKE '%$student_id%'
            AND student.student_name LIKE '%$student_name%';";
}

if(!empty($student_id) && !empty($department)) {
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id 
            AND student.student_id LIKE '%$student_id%'
            AND student.department_id = $department;";
}

if(!empty($student_id) && !empty($series)) {
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id 
            AND student.student_id LIKE '%$student_id%'
            AND student.series = $series;";
}

if(!empty($student_name) && !empty($series)) {
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id
            AND student.student_name LIKE '%$student_name%'
            AND student.series = $series;";
}

if(!empty($student_name) && !empty($department)) {
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id
            AND student.student_name LIKE '%$student_name%'
            AND student.department_id = $department;";
}

if(!empty($department) && !empty($series)) {
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id 
            AND student.department_id = $department
            AND student.series = $series;";
}

if(!empty($student_name) && !empty($department) && !empty($series)) {
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id
            AND student.student_name LIKE '%$student_name%'
            AND student.department_id = $department
            AND student.series = $series;";
}

if(empty($student_id) && empty($student_name) && empty($department) && empty($series)) {
    $sql = "SELECT student_id, student_name, department_name, series
            FROM student, department
            WHERE student.department_id = department.department_id
            ORDER BY student_id;";
}

$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">    
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Damion&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style.css">
        <title>Student Database</title>
    </head>
    <body>
        <div class="icon__container icon__search">
            <h2 class="icon__label">Search Here</h2>
            <i class="icon ion-md-search icon__cust"></i>
        </div>

        <div class="popup popup__search">
            <div class="form__container">
                <h2 class="form__heading">Search Here</h2>
                <i class="icon ion-md-close icon__close"></i>
                <form action="search.php" method="post" class="form">
                    <div class="form__group">
                        <input type="text" name="student_name" class="form__input" id="name" placeholder="Student Name">
                        <label for="student_name" class="form__label">Student Name</label>
                    </div>

                    <div class="form__group">
                        <input type="number" name="student_id" class="form__input" id="student_id" placeholder="Student ID">
                        <label for="student_id" class="form__label">Student ID</label>
                    </div>

                    <div class="form__group">
                        <div class="form__select-container">
                            <select name="department" id="department" class="form__select">
                                <option value="">Choose Department</option>
                                <option value="eee">EEE</option>
                                <option value="cse">CSE</option>
                                <option value="ece">ECE</option>
                                <option value="ce">CE</option>
                                <option value="me">ME</option>
                            </select>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__select-container">
                            <select name="series" id="series" class="form__select">
                                <option value="">Choose Series</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                            </select>
                        </div>
                    </div>

                    <div class="form__group">
                        <button name="search" class="form__submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <h1 class="heading_student">Search Result</h1>
        <table>
            <thead>
                <tr>
                    <th>student id</th>
                    <th>student name</th>
                    <th>department name</th>
                    <th>series</th>
                </tr>
            </thead>
            
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>". $row['student_id']. "</td> <td>". $row['student_name']. "</td> <td>". $row['department_name']. "</td> <td>". $row['series']. "</td> </tr>";
                }
            ?>
            
        </table>

        <script src="../main.js"></script>
    </body>
</html>