
<?php
/*Name der Seite*/
$pageName = "Zu meiner Person";
/*Information fuer den meta tag*/
$keywords_array = ["Meditation", "Zen", "Yoga", "Dachau", "München", "Theologie", "Theologe", "interreligiöser Dialog",
"Abhishiktananda", "Hinduismus", "Buddhismus", "Christentum", "Spiritualität", "spirituell",
"Indien", "Reise", "Seminar", "Seelsorge", "Yoga für Kinder", "Vorträge", "spirituelle Begleitung", "Beratung"];
$keywords_text = implode(", ", $keywords_array);
$description = "Christian Hackbarth-Johnson unterrichtet Yoga und Zen-Meditation in Dachau, München und in Seminarhäusern in Deutschland, Österreich und in der Schweiz. 
Zusätzlich bietet er deutschsprachige spirituelle Reiseseminare in Indien an. 
Er ist Theologe mit Schwerpunkt spiritueller interreligiöser Dialog.";
?>

<?php
/*Hier wird der HTML opener und die Kopfzeile der Seite eingefuegt*/
require_once 'Header.php';
require_once 'Navigation.php';
?>

<!--Hier faengt der Inhalt an-->
<div class="mainContent">
    <div id="zuPerson">
        <img src="zuPerson1.jpg" alt="Christian Hackbarth-Johnson steht an einem Mikrofon und hält einen Vortrag." class="imgLeft">
        <p class="content">
            Aufgewachsen in Neufahrn/NB, studierte ich von 1984 an Evangelische Theologie in Tübingen, Wien und München und absolvierte anschliessend die Ausbildung zum Pfarrer in der Ev. Luth. Kirche in Bayern. 1998 zog ich mit meiner Familie nach Dachau, um an der Universität München im Fach Religionswissenschaft zu promovieren. Der Gegenstand meiner Arbeit war das Thema der doppelten religiösen Identität: Was geschieht, wenn in einem Menschen zwei Religionen zusammenkommen? Dies habe ich am Beispiel des Benediktiners und christlichen Sannyasin Henri Le Saux untersucht. Die Arbeit erschien 2003 im Druck unter dem Titel „Interreligiöse Existenz. Spirituelle Erfahrung und Identität bei Henri Le Saux, O.S.B. / Swami Abhishiktananda (1910 - 1973)“.
        </p>
        <p class="content">
            Das Thema bezieht sich auch auf mein eigenes Lebensthema. Schon vor Beginn meines Theologiestudiums hatte ich begonnen, mich für indische Religionen zu interessieren. Der Dialog zwischen der christlichen und den indischen religiösen Traditionen wurde mein Studienschwerpunkt. Dies brachte mich immer wieder auf Reisen nach Indien. 
        </p>
        <p class="content">
            Was mich dabei am meisten interessierte, war und ist die Möglichkeit spiritueller bzw. mystischer Erfahrung. Seit 1985 übe ich Yoga und Zen-Meditation. 1994 erhielt ich von meinem wichtigsten Lehrer, Prof. Dr. Michael von Brück, die Beauftragung, andere Menschen in den Weg des Zen einzuführen.
        </p>
        <p class="content">
            Von 2000 - 2003 bildete ich mich bei R. Sriram weiter zum Yogalehrer in der Tradition Sri Krishnamacharya, einer Yoga Schule in Chennai/ Indien, die grosses Gewicht legt auf die Anpassung des Yoga an die individuellen Gegebenheiten des Übenden im Einzelunterricht. Seit 2008 beschäftige ich mich verstärkt mit dem Integralen Yoga von Sri Aurobindo.
        </p>
        <p class="ctabutton right">
            <a href="Aktuelles.php">
                Aktuelle Angebote ansehen
            </a>
        </p>
        <p class="content">
            Ich vertrete eine integrale und interreligiöse Spiritualität, in der möglichst alle Ebenen und Bereiche des Lebens Berücksichtigung finden. Meine Tätigkeit in Dachau in sowie in verschiedenen Seminarhäusern im In- und Ausland umfasst Einführungskurse in <a href="ZenMeditation.php">Zen-Meditation</a> und Yoga, Zen-Sesshins (mit Yoga), <a href="Yoga.php">Yoga-Unterricht</a>, Yoga-Retreats,<a href="Beratung.php"> seelsorgerliche und spirituelle Beratung</a>,<a href="Vortraege.php"> Vorträge und Seminare zu religiösen und interreligiösen Themen</a>, sowie die Organisation und Durchführung von spirituell und interreligiös orientierten <a href="Indienreise.php"> Seminaren in Indien</a>. 
        </p>
        <p class="content">
            Ehrenamtlich engagiere ich mich im Vorstand der Vereine <a href="https://via-mundi.net/">Via Mundi e.V.</a>, <a href="Dialoge.php"> Spiritualität im Dialog e.V.</a>, und im Stiftungsrat der Stiftung Spiritualität und interreligiöser Dialog.
        </p>
    </div><!--closing tag zu Person-->
    <div id="lebenslauf">
        <h3 class="content">Kurzer Lebenslauf</h3>
        <p class="content">
            Geboren 1964 in Landshut, verheiratet, 2 Kinder.
        </p>
        <p class="content">
            Yoga und Zen Praxis seit 1985. 1993 Lehrbeauftragung für Einführungskurse in Zen und Yoga durch Prof. Dr. Michael von Brück, 2004 für Yoga in der Tradition von Sri Krishnamacharya durch R. Sriram. 
        </p>
        <p class="content">
            1984-93 Studium der Evang. Theologie, 1994-96 Ausbildung zum Pfarrer, 1996-98 Erziehungsurlaub, 1998-2002 Promotion im Fach Religionswissenschaft zum Dr. theol. (Interreligiöse Existenz. Spirituelle Erfahrung und Identität bei Henri Le Saux/Swami Abhishiktananda, Frankfurt a.M.: Peter Lang 2003).
        </p>
        <p class="content">
            Seit 1994 Vortragstätigkeit als freier interreligiöser Theologe, Religionswissenschaftler und spiritueller Praktiker in der Erwachsenenbildung, v.a. Anleitung und Begleitung in Zen und Yoga an verschiedenen Meditationshäusern im In- und Ausland. Seit 2005 Reiseseminare in Indien. Übersetzungstätigkeit.
        </p>
        <p class="content">
            2004 Mitgründung der Praxisgemeinschaft “together“ in Dachau, 2010 Umzug mit der Praxis in die Dachauer Altstadt mit neuem Namen: “Wege der Transformation. Praxis für integrale und interreligiöse Spiritualität”, die 2016 aufgelöst wurde.
        </p>
        <p class="content">
            Freier Mitarbeiter im ULG Spirituelle Theologie im interreligiösen Prozess (Universität Salzburg).
        </p>
        <p class="content">
            2016-1019 Postdoc im FWF-Forschungsprojekt „Interreligious Biography of Bettina Bäumer, Austrian Scholar of Religion“ an der Universität Salzburg.
        </p>
        <p class="content">
            Ab 2020 Freiberufliche Tätigkeit an verschiedenen Bildungs- und Meditationshäusern, Arbeit an Büchern, Yoga-Einzelunterricht.
        </p>
    </div><!--Closing tag lebenslauf-->
</div><!--Closing tag mainContent-->



<?php
require_once 'Footer.php'
?>

