<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 01/12/2017
 * Time: 14:21
 */

class Reservation
{

    protected $id;
    protected $firstname;
    protected $lastname;
    protected $mail;
    protected $date_reservation;
    protected $date_emprunt;
    protected $date_retour;
    protected $id_livre;
    protected $id_revue;
    protected $id_formation;

    /**
     * @return mixed
     */
    public function getIdFormation()
    {
        return $this->id_formation;
    }

    /**
     * @param mixed $id_formation
     */
    public function setIdFormation($id_formation): void
    {
        $this->id_formation = $id_formation;
    }

    /**
     * @return mixed
     */
    public function getIdRevue()
    {
        return $this->id_revue;
    }

    /**
     * @param mixed $id_revue
     */
    public function setIdRevue($id_revue): void
    {
        $this->id_revue = $id_revue;
    }

    /**
     * @return mixed
     */
    public function getIdLivre()
    {
        return $this->id_livre;
    }

    /**
     * @param mixed $id_livre
     */
    public function setIdLivre($id_livre): void
    {
        $this->id_livre = $id_livre;
    }

    /**
     * @return mixed
     */
    public function getDateRetour()
    {
        return $this->date_retour;
    }

    /**
     * @param mixed $date_retour
     */
    public function setDateRetour($date_retour): void
    {
        $this->date_retour = $date_retour;
    }

    /**
     * @return mixed
     */
    public function getDateEmprunt()
    {
        return $this->date_emprunt;
    }

    /**
     * @param mixed $date_emprunt
     */
    public function setDateEmprunt($date_emprunt): void
    {
        $this->date_emprunt = $date_emprunt;
    }

    /**
     * @return mixed
     */
    public function getDateReservation()
    {
        return $this->date_reservation;
    }

    /**
     * @param mixed $date_reservation
     */
    public function setDateReservation($date_reservation): void
    {
        $this->date_reservation = $date_reservation;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
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
    public function setId($id): void
    {
        $this->id = $id;
    }


}