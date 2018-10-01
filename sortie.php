<?php
namespace Entity;

class Sortie
{
    private $idSortie;
    protected $mission;
    private $userSortie;
    private $unit;
    private $country;
    private $start;
    private $end;
    private $status;

    /**
     * @var User
     */
    protected $user;

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
    public function __construct($idSortie, $country, $end, Mission $mission, $start, $status, $unit, $userSortie, User $user)
    {
        $this->idSortie=$idSortie;
        $this->mission=$mission;
        $this->userSortie=$userSortie;
        $this->unit=$unit;
        $this->country=$country;
        $this->start=$start;
        $this->end=$end;
        $this->status=$status;
        $this->user = $user;
    }

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
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
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
    public function getCountry()
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
    public function getUnit()
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