<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Student Database</title>
</head>

<body>
    <i class="fas fa-search" id="search-icon"></i>

    <div class="form__container">
        <h2 class="form__heading">Search Here</h2>
        <form action="includes/search.php" method="post" class="form">
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
    
    <h1 class="heading_student">Student Database</h1>

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

    <script>
        var searchIcon = document.querySelector("#search-icon");
            
        searchIcon.addEventListener("click", function() {
            if(document.querySelector(".form__container").style.display == "none")
            document.querySelector(".form__container").style.display = "block";
            if(document.querySelector(".form__container").style.display != "none")
            document.querySelector(".form__container").style.display = "none";
        });
    </script>
</body>
</html>