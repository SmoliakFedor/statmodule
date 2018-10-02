<?php
namespace Entity;
 class Country
 {
     private  $idCountry;
     private  $nameCountry;
     private  $coalition;

//     public function __construct($coalition, $idCountry, $nameCountry)
//     {
//         $this->coalition=$coalition;
//         $this->idCountry=$idCountry;
//         $this->nameCountry=$nameCountry;
//     }

     public function setCountry($nameCountry)
     {
         $this->nameCountry=$nameCountry;
     }

     public function setIdCountry($idCountry)
     {
         $this->idCountry=$idCountry;
     }

     public function setCoalition($coalition)
     {
         $this->coalition=$coalition;
     }

     public function getCountry()
     {
         return $this->nameCountry;
     }

    public function getCoalition()
    {
        return $this->coalition;
    }

    public function getIdCountry()
    {
        return $this->idCountry;
    }
}