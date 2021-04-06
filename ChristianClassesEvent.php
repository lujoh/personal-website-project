<?php


//This is where the classes for Christian's Aktuelle Termine will be defined

class Event {
    public $event_datum;
    public $event_datum_string;
    public $event_jahr;
    public $event_monat;
    public $event_tag;
    public ?string $event_name;
    public $event_link;
    public ?string $event_location;
    public ?string $event_sonstiges;
    
    //method to create a new event
    function __construct($jahr, $monat, $tag, $name, $link, $location, $sonstiges="") {
        $this->event_jahr = $jahr;
        $this->event_monat = $monat;
        $this->event_tag = $tag;
        $this->event_name = $name;
        $this->event_link = $link;
        $this->event_location = $location;
        $this->event_sonstiges = $sonstiges;
        $this->event_datum = $tag . "-" . $monat . "-" . $jahr;
        $this->event_datum = date_create_from_format("j-m-Y", $this->event_datum);
        $this->event_datum_string = date_format($this->event_datum, "d.m.y");
    }
    
    //method to display the event on the page
    function display_event(){
        echo "<div class='event_container'>
        <div class='event_datum'>
            $this->event_datum_string
        </div>
        <div class='event_info'>
            <p class='event_name'>
                $this->event_name
            </p>
            <p class='event_details'>
                $this->event_location <br>
                $this->event_sonstiges <br>
                <a href='{$this->event_link}' title='Mehr infos zu {$this->event_name}' target='_blank'>Mehr Informationen</a>
            </p><br>
        </div>
    </div>";
    }
    
    //method to save the event to the eventfile
    function save_event(){
        if(!file_put_contents('C:/xampp/htdocs/ChristianWebsite/saved_items/saved_events.txt', serialize($this), FILE_APPEND)){
            return false;
        } else {
            file_put_contents('C:/xampp/htdocs/ChristianWebsite/saved_items/saved_events.txt', '\r\n', FILE_APPEND);
            return true;
        }
    }
    
}

class Event_Multiday extends Event {
    public $event_end_datum;
    public $event_end_jahr;
    public $event_end_monat;
    public $event_end_tag;
    
    function __construct($jahr, $monat, $tag, $end_jahr, $end_monat, $end_tag, $name, $link, $location, $sonstiges="") {
        parent::__construct($jahr, $monat, $tag, $name, $link, $location, $sonstiges);
        $this->event_end_jahr = $end_jahr;
        $this->event_end_monat = $end_monat;
        $this->event_end_tag = $end_tag;
        $this->event_end_datum = $end_tag . "-" . $end_monat . "-" . $end_jahr;
        $this->event_end_datum = date_create_from_format("d-m-Y", $this->event_end_datum);
        $this->event_datum_string = date_format($this->event_datum, "d.m.y") . "<br> - " . date_format($this->event_end_datum, "d.m.") ;   }
}

class Event_List {
    public array $list_events;
    protected $event_source_file = 'C:/xampp/htdocs/ChristianWebsite/saved_items/saved_events.txt';
    protected $current_datum;
    
    //method to construct the Event_List from the saved_events file
    function __construct() {
        $this->list_events = explode('\r\n', file_get_contents($this->event_source_file));
        $this->current_datum = new DateTime();
        $this->list_events = array_filter($this->list_events);
        foreach ($this->list_events as &$single_event) {
            $single_event = unserialize($single_event);
        }
    }
    

    //method to sort the events
    function sort_dates() {
        usort($this->list_events, function($a, $b) {
            if ($a->event_datum == $b->event_datum) return 0;
            return ($a->event_datum < $b->event_datum)?-1:1;
        });
    }
    
    //method to retrieve a single event based on the position in the array
    function get_single_event($event_index) {
        return $this->list_events[$event_index];
    }
    
    //method to display events
    function display_all_events() {
        $this->sort_dates();
        foreach ($this->list_events as $single_event) {
            if ($this->current_datum <= $single_event->event_datum){
                $single_event->display_event();
                echo "<br>";
            }
        }
    }
    
    //method to display events for editing by the admin
    /*This method will list out each event and display a button to select to edit it next to it.
    This around the function will be a form element and each button will submit the index value in the array that corresponds with the event chosen.
    */
    function event_edit_display() {
        $this->sort_dates();
        echo '<form method="post" id="edit_events_form" action="editEvent.php">';
        echo '<button type="submit" class="YesButton" name="event_nummer" form="edit_events_form" value="-1">Neuer Termin</button>';
        foreach ($this->list_events as $event_index => $single_event) {
            
            if ($this->current_datum <= $single_event->event_datum){
                echo '<div class="event_edit_container">';
                $single_event->display_event();
                echo '<div class="event_edit_button">
                <button type="submit" class="YesButton" name="event_nummer" form="edit_events_form" value="'
                    . $event_index .
                    '">Bearbeiten</button>
                </div>
                </div>
                <br><br>';
            }
        }
        echo '</form>';
    }
    
    /*method to save events. This method will overwrite the existing event file with the updated events.*/
    function save_events() {
        file_put_contents('C:/xampp/htdocs/ChristianWebsite/saved_items/saved_events.txt', '');
        $success = true;
        foreach ($this->list_events as $single_event) {
            if(!$single_event->save_event()) {
                $success = false;
            }
        }
        if ($success) {
            echo "Änderungen erfolgreich gespeichert.";
        } else {
            echo "Etwas ist schief gelaufen. Bitte kontaktieren Sie ihren Websiteadministrator.";
        }
        
    }
    
    //method to delete a single event from the array. The whole array needs to be saved after using this method
    function delete_event($event_index) {
        if ($event_index >= 0) {
            array_splice($this->list_events, $event_index, 1);
        }
    }
    
    //method to delete past events
    //this method should be run around once a month
    function delete_past_events() {
        $temporary_events_list = [];
        foreach ($this->list_events as $single_event) {
            if ($this->current_datum <= $single_event->event_datum){
                array_push($temporary_events_list, $single_event);
            }
        }
        $this->list_events = $temporary_events_list;
        $this->save_events();
    }
}