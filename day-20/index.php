<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;
    $insert = '';
    if(isset($_POST['btn'])){
    //    $student = new App\classes\Student();
//        $student->saveStudentInfo($_POST);
        $insert = Student::saveStudentInfo($_POST);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="color: #28a745;"><?php echo $insert; ?></h1>
<form action="" method="post">
    <hr>
    <a href="index.php">Add Student</a>
    <a href="view-student.php">View Student</a>
    <hr>
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" value="" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>

</form>
</body>
</html>
