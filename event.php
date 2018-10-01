<?php
namespace Entity;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.09.18
 * Time: 16:07
 */

class event
{
    private $idEvent;
    protected $sortie;
    private $timeEvent;
    private $eventType;

    public function __construct($idEvent, Sortie $sortie, $timeEvent, $eventType)
    {
        $this->idEvent=$idEvent;
        $this->sortie=$sortie;
        $this->timeEvent=$timeEvent;
        $this->eventType=$eventType;
    }

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