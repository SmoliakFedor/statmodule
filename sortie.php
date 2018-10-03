<?php
namespace Entity;

class Sortie
{
    public$id;
    public $mission;
    public $userSortie;
    public $unit;
    public $country;
    public $start;
    public $end;
    public $status;
    public $event = [];

    /**
     * @var User
     */
    public $user;

    /**
     * Sortie constructor.
     * @param $idSortie
     * @param $country
     * @param $end
     * @param $mission
     * @param $start
     * @param $status
     * @param $unit
     * @param $userSortie
     * @param User $user
     */


    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser() : User
    {
        return $this->user;
    }

    /**
     * @param mixed $idSortie
     */
    public function setIdSortie($idSortie)
    {
        $this->idSortie = $idSortie;
    }


    /**
     * @param mixed $userSortie
     */
    public function setUserSortie($userSortie)
    {
        $this->userSortie = $userSortie;
    }

    /**
     * @param mixed $unit
     */
    public function setUnit(Unit $unit)
    {
        $this->unit = $unit;
    }

    /**
     * @param mixed $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    /**
     * @param mixed $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * @param mixed $mission
     */
    public function setMission(Mission $mission)
    {
        $this->mission = $mission;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getMission() : Mission
    {
        return $this->mission;
    }

    /**
     * @return mixed
     */
    public function getCountry() : Country
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @return mixed
     */
    public function getIdSortie()
    {
        return $this->idSortie;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getUnit() : Unit
    {
        return $this->unit;
    }

    /**
     * @return mixed
     */
    public function getUserSortie()
    {
        return $this->userSortie;
    }


}