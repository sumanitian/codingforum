<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    if(empty($name) || empty($subject) || empty($mailFrom) || empty($message)){
        header("Location: /forum/contact.php?error");
    }
    else{
        $mailTo = "sumanprasadofficially@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received and e-mail from ".$name.".\n\n".$message;

        if(mail($mailTo, $subject, $txt, $headers)){
            header("Location: /forum/contact.php?success");
        }
    }
}
    // header("Location: /forum/contact.php>mailsend");
?>