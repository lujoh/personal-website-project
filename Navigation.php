<button class="menubutton" type="button" name="open-menu" aria-label="Hauptmenü öffnen" onclick="toggleMenu(this, 'nav')" aria-expanded="false">&#9776;</button>
<nav class="nav" id="nav" role="navigation">
    <ul>
        <li><a href="Home.php" id="Zu meiner Person">Zu meiner Person </a></li>
        <li><button class="submenu" type="button" aria-label="Angebotemenü  öffnen" onclick="toggleMenu(this, 'Angebotemenu')" aria-expanded="false">Angebote</button>
            <!--Dropdown-->
            <ul class="dropdown" id="Angebotemenu">
                <li><a href="Yoga.php" id="Yoga">Yoga</a></li>
                <li><a href="YogaEinzelunterricht.php" id="Yoga Einzelunterricht"> Yoga Einzelunterricht</a></li>
                <li><a href="ZenMeditation.php" id="Achtsamkeitsmeditation, Zen und kontemplatives Gebet">Achtsamkeitsmeditation, Zen und kontemplatives Gebet</a></li>
                <li><a href="Beratung.php" id="Seelsorge und Spirituelle Beratung">Spirituelle Beratung</a></li>
            </ul>
        </li><!--closing tag angebote-->
        <li><button class="submenu" type="button" aria-label="Gruppenmenü  öffnen" onclick="toggleMenu(this, 'Gruppenmenu')" aria-expanded="false">Gruppen</button>
            <!--Dropdown-->
            <ul class="dropdown" id="Gruppenmenu">
                <li><a href="Lesekreis.php" id="Sri Aurobindo Lesekreis">Sri Aurobindo Lesekreis</a></li>
                <li><a href="Indienreise.php" id="Reiseseminare in Indien">Indienreisen</a></li>
                <li><a href="aktuelleIndienreise.php" id="Aktuelle Indienreise">Aktuelle Indienreise</a></li>
                <li><a href="Dialoge.php" id="Dachauer SpiritualitätsDialoge">Dachauer SpiritualitätsDialoge</a></li>
            </ul>
        </li><!--closing tag Gruppen-->
        <li><button class="submenu" type="button" aria-label="Veröffentlichungen und Vorträge Menü öffnen" onclick="toggleMenu(this, 'Vortragmenu')" aria-expanded="false">Veröffentlichungen und Vorträge</button>
            <ul class="dropdown" id="Vortragmenu">
                <!--Dropdown-->
                <li><a href="Vortraege.php" id="Vorträge und Seminare">Vorträge und Seminare</a></li>
                <li><a href="Veroeffentlichungen.php" id="Veröffentlichungen">Veröffentlichungen</a></li>
                <li><a href="Uebersetzungen.php" id="Übersetzungen">Übersetzungen</a></li>
            </ul>
        </li><!--Closing tag Veröffentlichungen und Vorträge-->
        <li><button class="submenu" type="button" aria-label="Aktuelles und Kontakt Menü öffnen" onclick="toggleMenu(this, 'Kontaktmenu')" aria-expanded="false">Aktuelles und Kontakt</button>
            <!--Dropdown-->
            <ul class="dropdown" id="Kontaktmenu">
                <li><a href="Aktuelles.php" id="Aktuelles">Aktuelles</a></li>
                <li><a href="AktuellerRundbrief.php" id="Aktueller Rundbrief">Aktueller Rundbrief</a></li>
                <li><a href="Kontakt.php" id="Kontakt und Impressum">Kontakt und Impressum</a></li>
                <li><a href="datenschutz.php" id="Datenschutz">Datenschutz</a></li>
                <li><a href="Links.php" id="links">Links</a></li>
            </ul>
        </li><!--Closing tag aktuelles und Kontakt-->
    </ul><!--Closing tag for main navigation ul-->
</nav>
