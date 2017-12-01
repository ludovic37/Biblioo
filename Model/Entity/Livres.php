<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 01/12/2017
 * Time: 14:06
 */

class Livres
{
    protected $id;
    protected $title;
    protected $author;
    protected $year;
    protected $book_cover;
    protected $external_link;
    protected $id_category;
    protected $id_disponibility;

    /**
     * Livres constructor.
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
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
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
    public function getBookCover()
    {
        return $this->book_cover;
    }

    /**
     * @param mixed $book_cover
     */
    public function setBookCover($book_cover)
    {
        $this->book_cover = $book_cover;
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