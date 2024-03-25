<?php
    if(!isset($_POST["email"]) || empty($_POST["email"]) || // looks weather the email and or message is set or is not set
    !isset($_POST["message"]) || empty($_POST["message"])) {
        
        if((!isset($_POST["email"]) || empty($_POST["email"])) &&
        (!isset($_POST["message"]) || empty($_POST["message"]))) {
            $error = "?email=error&message=error";
        }
        elseif((!isset($_POST["email"]) || empty($_POST["email"])) &&
        (isset($_POST["message"]) || !empty($_POST["message"]))) {
            $error = "?email=error&message=" . $_POST["message"];
        }
        else {
            $error = "?message=error&email=" . $_POST["email"];
        }
        
        header("Location: index.php" . $error);
        die();
    }

    if(!isset($_POST["name"]) || empty($_POST["name"])) { // Makes the name not required
        $theName = "N/A";
    }
    else {
        $theName = $_POST["name"];
    }

    $theEmail = $_POST["email"]; // Code to send Email
    $theMessage = $_POST["message"];

    $text = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This is just a test</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";

    $to = "avon.owen@gmail.com";
    $subject = "Inquiry via Website - " .$theName;
    $text = $theMessage;

//  Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $headers .= "From: " . $theEmail;

    mail($to, $subject, $text, $headers);

    header("Location:../thanks.html");

?>