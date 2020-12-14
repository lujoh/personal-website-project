<?php
$gesendet = false; //variable to see if message was sent
$endnachricht = "";
$Fehlermeldung_Email_N = '';
$senden = true; //variable to see if message is ready to get sent
if(isset($_POST["abonieren"])) {
    function clean_input($input) {
        return trim(htmlspecialchars($input));
    }
    function check_if_empty($field, &$error_name, $fieldname) {
        if(empty($field)){
            $error_name = 'Bitte füllen Sie das ' . $fieldname . ' Feld aus.';
            global $senden;
            $senden = false;
        } else {
            $error_name = "";
        }
    }
    //set variables
    $email_empfaenger = "samanthalyrin@gmail.com"; //test email for now
    $email_betreff = "Website Newsletter Abo Anfrage";
    $email_text = "";
    $email_sender = "From: ";
    //get variables from form
    $Email_N = clean_input($_POST['Email_N']);
    //validate required fields
    if(empty($Email_N) || !filter_var($Email_N, FILTER_VALIDATE_EMAIL)) {
        $Fehlermeldung_Email_N = "Bitte geben Sie Ihre Email im Format benutzer@domain.com ein.";
        $senden = false;
    }
    //check if message gets sent
    if($senden === true) {
        //build message
        $email_text = "Der Absender möchte zum Emailverteiler hinzugefügt werden. Die Emailadresse ist: " . $Email_N;
        $email_sender .= $Email_N;
        //send message
        if(mail($email_empfaenger, $email_betreff, $email_text, $email_sender)) {
            $gesendet = true;
            $endnachricht = "Vielen Dank für ihr Abo.";
        } else {
            $endnachricht = "Etwas ist schief gelaufen. Bitte versuchen Sie es später nochmal.";
        }
    }
}
?>




<div class="newsletterAbo">
    <p class="content">
        Wer in die Verteilerliste für den Rundbrief mit aktuellen Veranstaltungen aufgenommen werden möchte, möge sich hier anmelden, oder mir eine Email senden.
    </p>
    <form name="NewsletterAbo" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<!--          action="kontakt_receiving.php">-->
        <input type="submit" value="abonieren" class="ctabutton_second right" name="abonieren">
        <p class="content">Newsletter Anmeldung:</p>        
        <label for="Email_N">E-mail-Adresse:</label>
        <input type="email" id="Email_N" name="Email_N" required>
        <p class="form_error">
            <?= $Fehlermeldung_Email_N; ?>
        </p><br>
        
    </form>
</div><!--Closing tag Kontaktform-->
<div class="form_result">
    <p>
        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST" && $senden == true) {
            echo $endnachricht;
        }
        ?>
    </p>
</div>