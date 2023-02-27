<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $servername = "192.168.150.213";
        $username = "webprogss211";
        $password = "fancyR!ce36";
        $dbname = "webprogss211";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $full_name =  $_REQUEST['full_name'];
    $subject_taken = $_REQUEST['subject_taken'];
    $email =  $_REQUEST['email'];
    $message_flow = $_REQUEST['message_flow'];

    $sql = "INSERT INTO abalia_myguest (full_name, subject_taken, email, message_flow)
  VALUES ('$full_name','$subject_taken','$email','$message_flow')";
  
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Thank you: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
z