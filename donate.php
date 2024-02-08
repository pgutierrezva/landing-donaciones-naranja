<?php
    $to = $_POST["email"];
    $name = $_POST["fname"];
    $email = 'demo@spondonit.com';
    $type = 1; /* $_POST["type"]; */
    $amount = $_POST["amount"];
    $message = $_POST["message"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $name . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$to.'</td>
        </tr>
        <tr><td>Start: '.$type.'</td></tr>
        <tr><td>Arrival: '.$amount.'</td></tr>
        <tr><td>Departure: '.$message.'</td></tr>       
    </table>';

    if (@mail($to, $email, $message, $headers)) {
        echo 'El mensaje ha sido enviado.';
    } else {
        echo 'Algo ha fallado';
    }
?>
