<?php
    $name = $_POST['Name'];
    $age = $_POST['Age']l;
    $visitor_email = $_POST['Email'];
    $no = $_POST['Phone'];
    $message = $_POST['Message'];

    $email_form 'alongmonbey12@gmail.com';

    $email_subject = "Form submission";

    $email_body = "username: $name.\n".
                    "user email: $visitor_email.\n".
                      "age: $age.\n".
                         "no: $no.\n".
                             "message: $message.\n";

    $to = "deathsynite@gmail.com"

    $headers = "from: $email_form \r\n";

    $headers .= "Reply to: Visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: apply.html");
?>