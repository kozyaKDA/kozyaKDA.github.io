
<?php
     $conn = mysqli_connect("localhost","root","","languages");

     if($conn == false){
        die("Беда с подключением к базе" . mysqli_connect_error());
     }

    $user_email = $_POST['email'];
    $user_name = $_POST['name'];
    $user_text = $_POST['text'];

    $sql = "INSERT INTO `form-data` VALUES (DEFAULT,'$user_email','$user_name','$user_text')";

     if(mysqli_query($conn, $sql)){
          echo "Good";
     } else{
          echo "Bad";
     }

    mysqli_close($conn);
?>



