<?php
namespace Entity;

class User
{
    protected $idUser;
    private $nameUser;
    private $password;
    private $registrationTime;
    private $sortieCount;
    private $flyingHours;

//    public function __construct($idUser, $nameUser, $password, $registrationTime, $sortieCount, $flyingHours)
//    {
//        $this->idUser=$idUser;
//        $this->nameUser=$nameUser;
//        $this->password=$password;
//        $this->registrationTime=$registrationTime;
//        $this->sortieCount=$sortieCount;
//        $this->flyingHours=$flyingHours;
//    }
    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @param mixed $nameUser
     */
    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $registrationTime
     */
    public function setRegistrationTime($registrationTime)
    {
        $this->registrationTime = $registrationTime;
    }

    /**
     * @param mixed $sortieCount
     */
    public function setSortieCount($sortieCount)
    {
        $this->sortieCount = $sortieCount;
    }

    /**
     * @param mixed $flyingHours
     */
    public function setFlyingHours($flyingHours)
    {
        $this->flyingHours = $flyingHours;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @return mixed
     */
    public function getFlyingHours()
    {
        return $this->flyingHours;
    }

    /**
     * @return mixed
     */
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getRegistrationTime()
    {
        return $this->registrationTime;
    }

    /**
     * @return mixed
     */
    public function getSortieCount()
    {
        return $this->sortieCount;
    }
    
}