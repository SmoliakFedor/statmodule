<?php
namespace Entity;
 class Country
 {
     public  $idCountry;
     public  $nameCountry;
     public  $coalition;


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