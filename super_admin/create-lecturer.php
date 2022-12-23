<?php
require_once('config/connect.php');
require_once('functions/functions.php');

if (!isset($_SESSION['ultra_log'])) {
    gotoPage("../index");
}

// gotoPage('active-courses');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#S##@@U@#@P#**E*@#R$@#!@$#@$%#@ AdMin</title>
    <link rel="stylesheet" href="includes/style.css">

</head>


<body>
    <div class="header">
        <h1>Create Lecturer</h1>
        <strong>"And then the lord God formed man from the clay of the earth , and he breathed into his face the breath of life, and man became a living soul."<br> ~Genesis 2:7</strong>
    </div>

    <div>
        <form action="functions/createLecturer.php" method="POST">
            <div class="p-1 form-control">
                <label>First Name</label><br>
                <input type="text" placeholder="**Michael" required>
            </div>
            <div class="p-1 form-control">
                <label>Last Name</label><br>
                <input type="text" placeholder="**Orji" required>
            </div>
            <div class="p-1 form-control">
                <label>Gender</label><br>
                <select>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="p-1 form-control">
                <label>Email</label><br>
                <input type="email" placeholder="**michael123@mail.com" required>
            </div>
            <div class="p-1 form-control">
                <label>Staff Id</label><br>
                <input type="text" placeholder="**567438732" required>
            </div>
            <div class="p-1 form-control">
                <label>Department</label><br>
                <input onkeyup='simpleAsyncSearch("functions/suggestDept", "department_search_input", "suggestion_list","newCourseButton")' id="department_search_input" type="text" placeholder="**Computer Engineering" required>
                <ul id="suggestion_list">
                </ul>
            </div>

            <input type="submit" disabled id="newCourseButton" value="Create">
        </form>
    </div>

     <!-- JS Includes -->
     <?php 
    require_once('includes/js_includes.php')
    ?>
</body>

</html>