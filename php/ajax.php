<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST insert data</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost","root","","languages");

        if($conn == false){
            die("Беда с подключением к базе" . mysqli_connect_error());
        }

        $user_email = $_REQUEST['email'];
        $user_name = $_REQUEST['name'];
        $user_text = $_REQUEST['text'];

        $sql = "INSERT INTO form VALUES (DEFAULT,'$user_email','$user_name','$user_text')";

        if(mysqli_query($conn, $sql)){
            echo "Good";
        } else{
            echo "Bad";
        }

        mysqli_close($conn);
    ?>
</body>
</html>