<?php
/*Name der Seite*/
$pageName = "Aktuelles";
/*Information fuer den meta tag*/
$keywords_array = ["Termine", "Yoga", "Zen", "Meditation", "Interreligiös", "Theologie", "Seelsorge"];
$keywords_text = implode(", ", $keywords_array);
$description = "Aktuelles von Christian Hackbarth-Johnson und Wege der Transformation, Praxis für integrale und interreligiöse Spiritualität. Information zu aktuellen Yoga und Zen Meditations Kurse, Vorträge und Seminare.";
?>

<?php
/*Hier wird der HTML opener und die Kopfzeile der Seite eingefuegt*/
require_once 'Header.php';
require_once 'Navigation.php';
?>

<!--Hier faengt der Inhalt an-->
<main class="mainContent">
    <div id="aktuellesIntro">
        <h3 class="content">
            Yoga-Unterricht 
        </h3>
        <p class="content">
            Einzelunterricht, siehe auf der <a href="Yoga.php">Yoga-Seite.</a> <br>
            Yoga-Retreats im Lassallehaus/CH, Puregg/A, Zentrum Ranft/CH, Domicilium/D.
        </p>
        <h3 class="content">
            Zen-Meditation
        </h3>
        <p class="content">
            2 Kurse pro Semester in der VHS Dachau, gelegentlich im Buddhahaus München, Zen Sesshins (Retreat Kurse) in der Neumühle/Saarland, im Domicilium/Weyarn (bei München), dem Haus der Stille in Puregg/A und in St. Virgil/Salzburg. 
        </p>
        <p class="content">
            Siehe jeweils unten bei den aktuellen Terminen.
        </p>
        <br>
        <h3 class="content">
            Letzte Veröffentlichungen: 
        </h3>
        <p class="content">
            <b>Spiritualität der Zukunft. Suchbewegungen in einer multireligösen Welt</b> hrg. von Martin Rötting und mir. Siehe <a href="https://eos-verlag.de/de_DE/spiritualitaet-der-zukunft/">EOS-Verlag</a>. Darin finden sich u.a. die Vorträge der gleichnamigen Tagung, die im Mai 2017 in München stattgefunden hat. Insgesamt sind es 31 Autorinnen und Autoren, darunter Susanne Deininger, Martin Rötting und ich, sowie Laurie Johnson, Christian Rutishauser, Bettina Bäumer, Katharina Ceming, Andreas de Bruin und viele andere.
        </p>
        <p class="content">
            <b>Homo interreligiosus. Zur biographischen Verortung interreligiöser Prozesse bei Raimon Panikkar (1918-2010).</b> Beiträge einer internationalen Fachtagung zu seinem 100. Geburtstag. Hg. v. Christian Hackbarth-Johnson und Ulrich Winkler. Salzburger Theologische Studien interkulturell 22. Tyrolia Verlag, Innsbruck - Wien 2021. 
        </p>
        <p class="content">
            <b>Die biographische Verortung interreligiöser Prozesse. Ein Forschungsprojekt zur interreligiösen Biographie der österreichisch-indischen Religionswissenschaftlerin Bettina Sharada Bäumer</b>, Siehe in: <a href=" https://www.lit-verlag.de/isbn/978-3-643-99730-2?c=8070"><i>Salzburger Theologische Zeitschrift</i></a> (SaThZ), 14. Jg., 1. Heft 2020, S. 39-61. 
        </p>
        <p class="ctabutton">
            <a href="AktuellerRundbrief.php">Aktueller Rundbrief</a>
        </p>

    </div><!--Closing Tag aktuellesIntro-->
    <div id="aktuelleTermine"><!--Terminkalender hier einfuegen-->
        <h3 class="content">
            Aktuelle Termine:
        </h3>
        <div id="eventList">
            <?php
            include_once 'ChristianClassesEvent.php';
            $events = new Event_List();
            $events->display_all_events();
            
            ?>
            
        </div><!--Closing tag Event List-->
        
    </div><!--Closing tag aktuelleTermine-->
</main><!--Closing tag mainContent-->




<?php
require_once 'Footer.php'
?>

