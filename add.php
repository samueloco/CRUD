<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $school = $_POST['school'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];

    $insert = "INSERT INTO stdnt (name, age, school, grade, section) 
               VALUES ('$name', $age, '$school', '$grade', '$section')";
    $insertSQL = mysqli_query($connect, $insert);
    
    echo "<script>alert('Successfully Added!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgb(64, 56, 56);
        }
        h2{
            text-align: center;
        }
        .container {
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: left;
        }
        label {
            font-size: 13px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .btn {
            padding: 8px 1px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            width: 48%;
            text-align: center;
        }
        .btn-add { 
            background: green; 
            color: white; 
        }
        .btn-back {
            background: gray;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ADD STUDENT</h2>
        <form action="add.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" required>

            <label for="school">School</label>
            <input type="text" name="school" id="school" required>

            <label for="grade">Grade Level</label>
            <input type="number" name="grade" id="grade" required>

            <label for="section">Section</label>
            <input type="text" name="section" id="section" required>

            <div class="buttons">
                <a href="index.php" class="btn btn-back">BACK</a>
                <button type="submit" name="submit" class="btn btn-add">ADD</button>
            </div>
        </form>
    </div>
</body>
</html>
