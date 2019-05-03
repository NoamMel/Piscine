<?php

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "theodora.safi@edu.ece.fr";
//insérer le mail du client ligne9
    $to = "theodora.safi@edu.ece.fr";

    $subject = "PJ WEB2019";

    $message = "ECE-Amazon votre commande";

    $headers = "From: ECE-Amazon".$from;

    mail($to,$subject,$message, $headers);

    echo "Votre commande a bien été passée. À bientôt sur ECE-Amazon ;) ";
?>
