<?php

$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Naam is verplicht";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is verplicht";
} else {
    $email = $_POST["email"];
}

// phoneL
if (empty($_POST["phone"])) {
    $errorMSG .= "Telefoonnummer is verplicht";
} else {
    $phone = $_POST["phone"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Onderwerp is verplicht";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Bericht is verplicht";
} else {
    $message = $_POST["message"];
}


$EmailTo = "maudgussenhoven@gmail.com";
$Subject = "Nieuw bericht van coachmaud.com";

// prepare email body text
$Body = "";
$Body .= "Naam: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Telefoon: ";
$Body .= $phone;
$Body .= "\n";
// $Body .= "Subject: ";
// $Body .= $msg_subject;
// $Body .= "\n";
$Body .= "Bericht: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Er ging iets fout bij het versturen :(";
    } else {
        echo $errorMSG;
    }
}

?>