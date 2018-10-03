<?php
namespace Entity;

class Unit
{
    public $idUnit;
    public $type;
    public $subtype;
    public $nameUnit;


    /**
     * @param mixed $idUnit
     */
    public function setIdUnit($idUnit)
    {
        $this->idUnit = $idUnit;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $subtype
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
    }

    /**
     * @param mixed $nameUnit
     */
    public function setNameUnit($nameUnit)
    {
        $this->nameUnit = $nameUnit;
    }

    /**
     * @return mixed
     */
    public function getIdUnit()
    {
        return $this->idUnit;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @return mixed
     */
    public function getNameUnit()
    {
        return $this->nameUnit;
    }


}
