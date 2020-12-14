
<?php
/*Name der Seite*/
$pageName = "Kontakt und Impressum";
/*Information fuer den meta tag*/
$keywords_array = ["Christian Hackbarth-Johnson", "Kontakt", "Impressum"];
$keywords_text = implode(", ", $keywords_array);
$description = "Kontakt und Impressum für Christian-Hackbarth-Johnson";
?>

<?php
/*Hier wird der HTML opener und die Kopfzeile der Seite eingefuegt*/
require_once 'Header.php';
require_once 'Navigation.php';
?>

<!--Hier faengt der Inhalt an-->
<div class="mainContent">
    <div id="kontakt">
        <div class=content>
            <img src="kontakt.jpg" class="imgRight" alt="Christian Hackbarth Johnson sitzt im Schneidersitz auf einem Strohballen. Neben ihm steht seine Tochter. Im Hintergrund ist ein blauer Himmel mit weiβen Wolken, die auch im Hintergrund der Webseite zu sehen sind.">
        </div>
        <div class="content contentWithBorder">
            <p class="content">
                Dr. Christian Hackbart-Johnson <br>
                Konrad-Adenauer-Str. 22 <br>
                85221 Dachau <br>
                +49 (0)8131-3174051 (AB) <br>
                +49 (0)1575-5870009 <br>
                Wer in die Verteilerliste für den Rundbrief mit aktuellen Veranstaltungen aufgenommen werden möchte, möge mir eine E-mail senden oder kann sich unten anmelden. <br>
                chjohn<!--Dieser Kommentar verseckt die Adresse @gmail.com-->son<!--@gmail.com-->&commat;mne<!--Dieser Kommentar verseckt die Adresse erso&commat;gmail.com-->t-<span class="hidden">Hallo@</span>mail&period;de
            </p>
        </div>
        
    </div><!--closing tag kontakt-->
    <!--Hier wird die Kontaktform eingefuegt-->
    <?php
    require_once 'Kontaktform.php';
    ?>
    
</div><!--Closing tag mainContent-->



<?php
require_once 'Footer.php'
?>

