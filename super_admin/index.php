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
</head>
<style>
    * {
        text-align: center;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .header {
        margin-bottom: 2rem;
        margin-top: 12%;
    }

    ul {
        list-style: none;
    }

    li {
        margin: 10px;
    }
</style>

<body>
    <div class="header">
        <h1>Welcome To The Matrix</h1>
        <strong>"With great power, comes great responsibility."<br> ~Ben Parker</strong>
    </div>
    <ul>
        <li><a href="assign-lecturer-course">Assign Course To Lecturer</a></li>
        
        <li><a href="create-course">Create New Course</a></li>
        <li><a href="create-department">Create New Department</a></li>
        <li><a href="create-lecturer">Create New Lecturer</a></li>

        <!-- <li><a href="edit-course">Edit Course</a></li>
        <li><a href="edit-lecturer">Edit Lecturer Info</a></li>
        <li><a href="edit-student">Edit Student Info</a></li>

        <li><a href="test.php">Testing Code</a></li> -->
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>

        <br>
        <li><a href="functions/logout.php">Leave</a></li>
    </ul>

  

</body>

</html>