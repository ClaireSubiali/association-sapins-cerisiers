<?php
require __DIR__ . './../Models/Event.php';
class EventController extends CoreController {
    
    public function list()
    {
       
        $event = new Event();
        $eventList = $event->findAll();
        $this->show('next-events', ['event_list' => $eventList]);
    }

    public function allEvents()
    {
        $this->show('all-events');
    }
    public function event()
    {
        $this->show('event');
    }
    public function nextEvents()
    {
        $this->show('next-events');
    }
}