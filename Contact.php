<?php

// Retriving Form Fields Using post method
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Email = $_POST["Email"];
$Reason_of_Contact = $_POST["Reason_of_Contact"];
$Subject = $_POST["Subject"];
$Message = $_POST["Message"];

// Checking All Fields are Filled or Not
if ($Firstname == NULL || $Lastname == NULL || $Email == NULL || $Reason_of_Contact == NULL || $Subject == NULL || $Message == NULL) {
    header('Location: FormFails.php?Message=Please Fill All The Fields');
} else {
    $email = test_input($Email);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: FormFails.php?Message=Invalid Email Address');
    } else {
       // If data is valid it comes here
        
        // Connecting With local Mysql Database with Database Details
        $conn = mysqli_connect("localhost", "root", "", "MyResumeWebsite");
        $sql = "insert into contact(Firstname,Lastname,Email,Reason_of_Contact,Subject,Message,contactTime) values('" . $Firstname . "','" . $Lastname . "','" . $Email . "','" . $Reason_of_Contact . "','" . $Subject . "','" . $Message . "',now())";
        if ($conn->query($sql) === TRUE) {
            // If data inserts comes here
            
            // Preparing message
            $message = "<h1>A Form Submitted. The Submitted data is :</h1><br><h2>";
            $message .= "Firstname           :" . $Firstname . "<br>";
            $message .= "Lastname            :" . $Lastname . "<br>";
            $message .= "Email               :" . $Email . "<br>";
            $message .= "Reason_of_Contact   :" . $Reason_of_Contact . "<br>";
            $message .= "Subject             :" . $Subject . "<br><br>";
            $message .= "Message             :" . $Message . "<br></h2>";
            
            // Preparing Header
            $header = "From:gowthamkrazzy4@gmail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            
            // Mail Sending will Done Here
            $retval = mail($Email, $Subject, $message, $header);

            if ($retval == TRUE) {
                header('Location: FormSuccess.php?Message=Records Submitted Successfully');
            } else {
                header('Location: FormSuccess.php?Message=Mail Sending Failed');
            }
        } else {
            header('Location: FormFails.php?Message=Wrong Query');
        }
    }
}

// This Function will Validate The Email address
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

