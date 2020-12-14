<?php
$gesendet = false;
$endnachricht = "";
$Fehlermeldung_Name = $Fehlermeldung_Email = $Fehlermeldung_Betreff = $Fehlermeldung_Nachricht = '';
$senden = true;
if(isset($_POST["abschicken"])) {
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
    //function to keep contact form visible after reloading if necessary
    echo "<script> 
    showObject('hiddenKontakt');
    </script>";
    //set variables
    $email_empfaenger = "samanthalyrin@gmail.com"; //test email for now
    $email_betreff = "Website Kontaktform: ";
    $email_text = "";
    $email_sender = "From: ";
    //get variables from form
    $Name = clean_input($_POST['Name']);
    $Email = clean_input($_POST['Email']);
    $Telefon = clean_input($_POST['Telefon']);
    $Betreff = clean_input($_POST['Betreff']);
    $Nachricht = clean_input($_POST['Nachricht']);
    
    $Abonieren = "nein";
    if(isset($_POST['aboniert'])){
        $Abonieren = $_POST['aboniert'];
    }
    
    //validate required fields
    check_if_empty($Name, $Fehlermeldung_Name, '"Name"');
    check_if_empty($Betreff, $Fehlermeldung_Betreff, '"Betreff"');
    check_if_empty($Nachricht, $Fehlermeldung_Nachricht, '"Nachricht"');
    if(empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $Fehlermeldung_Email = "Bitte geben Sie Ihre Email im Format benutzer@domain.com ein.";
        $senden = false;
    }
    //Abonieren Nachricht
    if($Abonieren == "Ja"){
        $Abonieren = "Absender möchte zum Emailverteiler hinzugefügt werden.";
    } else {
        $Abonieren = "Absender nicht zum Emailverteiler hinzufügen";
    }
    //check if message gets sent
    if($senden === true) {
        //build message
        $email_text = "Email Kontaktform gesendet von: " . $Name . "\r\n Email: " . $Email . "\r\n Telefon: " . $Telefon . "\r\n"
            . $Abonieren . "\r\n Betreff: " . $Betreff . "\r\n Nachricht: " . $Nachricht;
        $email_betreff .= $Betreff;
        $email_sender .= $Email;
        //send message
        if(mail($email_empfaenger, $email_betreff, $email_text, $email_sender)) {
            $gesendet = true;
            $endnachricht = "Vielen Dank für ihre Nachricht.";
        } else {
            $endnachricht = "Etwas ist schief gelaufen. Bitte versuchen Sie es später nochmal.";
        }
    }
}
?>




<div class="kontaktform">
    <h3 class="content">
        Kontaktformular:
    </h3>
    <form name="Kontaktformular" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<!--          action="kontakt_receiving.php">-->
        <label for="Name">Name: <span class="anmerkung">(Pflichtfeld)</span></label>
        <input type="text" id="Name" name="Name" required>
        <p class="form_error">
            <?= $Fehlermeldung_Name; ?>
        </p><br>
        
        <label for="Email">E-mail-Adresse: <span class="anmerkung">(Pflichtfeld)</span></label>
        <input type="email" id="Email" name="Email" required>
        <p class="form_error">
            <?= $Fehlermeldung_Email; ?>
        </p><br>
        
        <label for="Telefon">Telefonnummer:</label>
        <input type="tel" id="Telefon" name="Telefon"><br><br>
        
        <input type="checkbox" id="aboniert" name="aboniert" value="Ja">
        <label for="aboniert">Newsletter abonieren</label><br><br>
        
        <label for="Betreff">Betreff: <span class="anmerkung">(Pflichtfeld)</span></label>
        <input type="text" id="Betreff" name="Betreff" required>
        <p class="form_error">
            <?= $Fehlermeldung_Betreff; ?>
        </p><br>
        
        <label for="Nachricht">Nachricht: <span class="anmerkung">(Pflichtfeld)</span></label>
        <textarea id="Nachricht" name="Nachricht"></textarea>
        <p class="form_error">
            <?= $Fehlermeldung_Nachricht; ?>
        </p><br>
        
        <input type="submit" name="abschicken" value="abschicken" class="ctabutton">
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