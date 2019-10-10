<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>Admin Field</h1>

    <div class="form_container">
        <h2 class="heading_secondary">Search:</h2>
        <form action="includes/adminsearch.php" method="post">
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
        <form action="includes/admininsert.php" method="post">
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
        <form action="includes/admindelete.php" method="post">
            <div class="input_container">
                <input type="text" name="student_name" id="text_input" placeholder= "Delete Name">
                <input type="number" name="student_id" id="number_input" placeholder= "Delete ID" required>
            </div>

            <div class="btn_container">
                <button type= "submit" name="delete">Delete</button>
            </div>
        </form>
    </div>

    <h1>Student Database</h1>
    
    <table>
        <thead>
            <tr>
                <th>student id</th>
                <th>student name</th>
                <th>department id</th>
                <th>series</th>
            </tr>
        </thead>
        
        <?php
            $sql = "SELECT student_id, student_name, department_name, series 
                    FROM student, department 
                    WHERE student.department_id = department.department_id;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>". $row['student_id']. "</td> <td>". $row['student_name']. "</td> <td>". $row['department_name']. "</td> <td>". $row['series']. "</td> </tr>";
                }
            }

            else echo "no result";
        ?>
    </table>
</body>
</html>