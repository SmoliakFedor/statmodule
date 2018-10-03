<?php
namespace Entity;

class Event
{
    public $idEvent;
    public $sortie;
    public $timeEvent;
    public $eventType;



    /**
     * @param mixed $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @param mixed $sortie
     */
    public function setSortie(Sortie $sortie)
    {
        $this->sortie = $sortie;
    }

    /**
     * @param mixed $timeEvent
     */
    public function setTimeEvent($timeEvent)
    {
        $this->timeEvent = $timeEvent;
    }

    /**
     * @param mixed $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @return mixed
     */
    public function getSortie() : Sortie
    {
        return $this->sortie;
    }

    /**
     * @return mixed
     */
    public function getTimeEvent()
    {
        return $this->timeEvent;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
    }

}