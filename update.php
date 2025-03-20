<?php

    include('connect.php');

    $EdID = '';
    $EdName = '';
    $EdAge = '';
    $EdAddress = '';
    $EdUsername = '';
    $EdPassword = '';
    
    if(isset($_POST['edit'])){
        $EdId = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdAge = $_POST['edAge'];
        $EdSchool = $_POST['edSchool'];
        $EdGrade = $_POST['edGrade'];
        $EdSection = $_POST['edSection'];
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $school = $_POST['school'];
        $grade = $_POST['grade'];
        $section = $_POST['section'];

        $update = "UPDATE stdnt SET name='$name', age='$age', school='$school', grade='$grade', section='$section' WHERE id=$id";
        $sqlUp = mysqli_query($connect, $update);

        echo "<script>alert('Successfully Updated!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(64, 56, 56);
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: left;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        .btn {
            flex: 1;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-back {
            background: gray;
            color: white;
            text-decoration: none;
        }
        .btn-update {
            background: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>EDIT STUDENT</h2>
        <form action="update.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $EdName ?>" required><br>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" value="<?= $EdAge ?>" required><br>
            
            <label for="school">School</label>
            <input type="text" name="school" id="school" value="<?= $EdSchool ?>" required><br>

            <label for="grade">Grade Level</label>
            <input type="number" name="grade" id="grade" value="<?= $EdGrade ?>" required><br>
            
            <label for="section">Section</label>
            <input type="text" name="section" id="section" value="<?= $EdSection ?>" required><br>
            
            <input type="hidden" name="id" value="<?= $EdId ?>">
            <div class="buttons">
                <a href="index.php" class="btn btn-back">BACK</a>
                <input type="submit" name="submit" value="UPDATE" class="btn btn-update">
            </div>
        </form>
    </div>
</body>
</html>
