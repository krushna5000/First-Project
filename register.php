<?php

    include './check_con.php';


    $name = $_GET['name'];
    $email = $_GET['email'];
    $contact = $_GET['contact'];
    $gender = $_GET['gender'];
    $dob = $_GET['dob'];
    $qualification = $_GET['qualification'];
  
   

    $sql = "INSERT INTO register(`name`,`email`,`contact`,`gender`,`dob`,`qualification`) VALUES ('$name','$email','$contact','$gender','$dob','$qualification')";

    if (mysqli_query($conn, $sql)) {

        ?>
        
        <html> <script> alert('Data added Successfully!!!'); window.location="Registrationform.html" </script> </html>

        <?php

    }else{
        
        echo 'Error: ' .$sql .'<br>' .
        mysqli_error($conn);
    }


?>