<?php
class EventController extends CoreController {

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