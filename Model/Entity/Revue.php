<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 01/12/2017
 * Time: 14:29
 */

class Revue
{
    protected $id;
    protected $title;
    protected $year;
    protected $month;
    protected $numero;
    protected $mag_cover;
    protected $description;
    protected $external_link;
    protected $id_category;
    protected $id_disponibility;

    /**
     * Revue constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getMagCover()
    {
        return $this->mag_cover;
    }

    /**
     * @param mixed $mag_cover
     */
    public function setMagCover($mag_cover)
    {
        $this->mag_cover = $mag_cover;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getExternalLink()
    {
        return $this->external_link;
    }

    /**
     * @param mixed $external_link
     */
    public function setExternalLink($external_link)
    {
        $this->external_link = $external_link;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param mixed $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * @return mixed
     */
    public function getIdDisponibility()
    {
        return $this->id_disponibility;
    }

    /**
     * @param mixed $id_disponibility
     */
    public function setIdDisponibility($id_disponibility)
    {
        $this->id_disponibility = $id_disponibility;
    }


}