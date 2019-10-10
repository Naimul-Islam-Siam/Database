<?php
include_once 'dbh.inc.php';

$student_name = $_POST["student_name"];
$student_id = $_POST["student_id"];

if(isset($_POST["insert"])) {
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

if(isset($_POST["insert"])) {
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

$sql = "INSERT INTO student VALUES ($student_id, '$student_name', '$department', $series);";

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
        <div class="warning_message">
        <?php
            echo '<h3>'. 'New Entry of "Student ID: '. $student_id. ' , Student Name: '. $student_name. '" is INSERTED.';
        ?>
        </div>

        <h1>Admin Field</h1>

        <div class="form_container">
            <h2 class="heading_secondary">Search:</h2>
            <form action="adminsearch.php" method="post">
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

            <h2 class="heading_secondary">Insert:</h2>
            <form action="admininsert.php" method="post">
                <div class="input_container">
                    <input type="text" name="student_name" id="text_input" placeholder= "Insert Name" required>
                    <input type="number" name="student_id" id="number_input" placeholder= "Insert ID" required>
                    <select name="department" id="department" required>
                        <option value="">Insert Department</option>
                        <option value="eee">EEE</option>
                        <option value="cse">CSE</option>
                        <option value="ece">ECE</option>
                        <option value="ce">CE</option>
                        <option value="me">ME</option>
                    </select>
                    <select name="series" id="series" required>
                        <option value="">Insert Series</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                    </select>
                </div>

                <div class="btn_container">
                    <button type= "submit" name="insert">Insert</button>
                </div>
            </form>

            <h2 class="heading_secondary">Delete:</h2>
            <form action="admindelete.php" method="post">
                <div class="input_container">
                    <input type="text" name="student_name" id="text_input" placeholder= "Delete Name">
                    <input type="number" name="student_id" id="number_input" placeholder= "Delete ID" required>
                </div>

                <div class="btn_container">
                    <button type= "submit" name="delete">Delete</button>
                </div>
            </form>
        </div>
    </body>
</html>