<?php
namespace Entity;

class Mission
{
    public $idMission;
    public $nameMission;
    public $describe;
    public $winner;

    public $sortie = [];



    /**
     * @param mixed $idMission
     */
    public function setIdMission($idMission)
    {
        $this->idMission = $idMission;
    }

    /**
     * @param mixed $nameMission
     */
    public function setNameMission($nameMission)
    {
        $this->nameMission = $nameMission;
    }

    /**
     * @param mixed $describe
     */
    public function setDescribe($describe)
    {
        $this->describe = $describe;
    }

    /**
     * @param mixed $winner
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }

    /**
     * @return mixed
     */
    public function getIdMission()
    {
        return $this->idMission;
    }

    /**
     * @return mixed
     */
    public function getNameMission()
    {
        return $this->nameMission;
    }

    /**
     * @return mixed
     */
    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * @return mixed
     */
    public function getWinner()
    {
        return $this->winner;
    }

}

