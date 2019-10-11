<?php
include_once 'dbh.inc.php';

$student_name = $_POST["student_name"];
$student_id = $_POST["student_id"];

$sq1 = "DELETE FROM student
        WHERE student.student_name = $student_name
        AND student.student_id = $student_id;";

$sql2 = "DELETE FROM student
        WHERE student.student_id = $student_id;";


if(empty($student_name)) {
    $sql = $sql2;
}

if(!empty($student_name) && !empty($student_id)) {
    $sql = $sql1;
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
        <title>Admin Control</title>
    </head>
    <body>
        <div class="warning_message">
        <?php
            echo '<h3>'. 'An Entry of "Student ID: '. $student_id. '" is DELETED.';
        ?>
        </div>

        <h1 class="heading_admin">Admin Field</h1>

        <div>
            <div class="icon__container icon__search">
                <h2 class="icon__label">Search Here</h2>
                <i class="icon ion-md-search icon__cust"></i>
            </div>

            <div class="icon__container icon__insert">
                <h2 class="icon__label">Insert Here</h2>
                <i class="icon ion-md-add icon__cust"></i>
            </div>

            <div class="icon__container icon__delete">
                <h2 class="icon__label">Delete Here</h2>
                <i class="icon ion-md-trash icon__cust"></i>
            </div>
        </div>
        
        <div class="popup popup__search">
            <div class="form__container">
                <h2 class="form__heading">Search Here</h2>
                <i class="icon ion-md-close icon__close icon__close-search"></i>
                <form action="adminsearch.php" method="post" class="form">
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

        <div class="popup popup__insert">
            <div class="form__container">
                <h2 class="form__heading">Insert Here</h2>
                <i class="icon ion-md-close icon__close icon__close-insert"></i>
                <form action="admininsert.php" method="post" class="form">
                    <div class="form__group">
                        <input type="text" name="student_name" class="form__input" id="name" placeholder="Student Name" required>
                        <label for="student_name" class="form__label">Student Name</label>
                    </div>

                    <div class="form__group">
                        <input type="number" name="student_id" class="form__input" id="student_id" placeholder="Student ID" required>
                        <label for="student_id" class="form__label">Student ID</label>
                    </div>

                    <div class="form__group">
                        <div class="form__select-container">
                            <select name="department" id="department" class="form__select" required>
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
                            <select name="series" id="series" class="form__select" required>
                                <option value="">Choose Series</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                            </select>
                        </div>
                    </div>

                    <div class="form__group">
                        <button name="insert" class="form__submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
            
        <div class="popup popup__delete">
            <div class="form__container" id="form__container-delete">
                <h2 class="form__heading">Delete Here</h2>
                <i class="icon ion-md-close icon__close icon__close-delete"></i>
                <form action="admindelete.php" method="post" class="form">
                    <div class="form__group">
                        <input type="text" name="student_name" class="form__input" id="name" placeholder="Student Name">
                        <label for="student_name" class="form__label">Student Name</label>
                    </div>

                    <div class="form__group">
                        <input type="number" name="student_id" class="form__input" id="student_id" placeholder="Student ID" required>
                        <label for="student_id" class="form__label">Student ID</label>
                    </div>

                    <div class="form__group">
                        <button name="delete" class="form__submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="../main.js"></script>
    </body>
</html>