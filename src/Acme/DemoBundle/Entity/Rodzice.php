<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rodzice
 *
 * @ORM\Table(name="rodzice")
 * @ORM\Entity
 */
class Rodzice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rodzica", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRodzica;

    /**
     * @var string
     *
     * @ORM\Column(name="imie", type="string", length=20, nullable=false)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwisko", type="string", length=20, nullable=false)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="plec", type="string", length=10, nullable=false)
     */
    private $plec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_urodzenia", type="date", nullable=true)
     */
    private $dataUrodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=20, nullable=false)
     */
    private $ulica;

    /**
     * @var string
     *
     * @ORM\Column(name="kod_pocztowy", type="string", length=6, nullable=false)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="miejscowosc", type="string", length=20, nullable=false)
     */
    private $miejscowosc;



    /**
     * Get idRodzica
     *
     * @return integer 
     */
    public function getIdRodzica()
    {
        return $this->idRodzica;
    }

    /**
     * Set imie
     *
     * @param string $imie
     * @return Rodzice
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string 
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Rodzice
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string 
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set plec
     *
     * @param string $plec
     * @return Rodzice
     */
    public function setPlec($plec)
    {
        $this->plec = $plec;

        return $this;
    }

    /**
     * Get plec
     *
     * @return string 
     */
    public function getPlec()
    {
        return $this->plec;
    }

    /**
     * Set dataUrodzenia
     *
     * @param \DateTime $dataUrodzenia
     * @return Rodzice
     */
    public function setDataUrodzenia($dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;

        return $this;
    }

    /**
     * Get dataUrodzenia
     *
     * @return \DateTime 
     */
    public function getDataUrodzenia()
    {
        return $this->dataUrodzenia;
    }

    /**
     * Set ulica
     *
     * @param string $ulica
     * @return Rodzice
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Get ulica
     *
     * @return string 
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Set kodPocztowy
     *
     * @param string $kodPocztowy
     * @return Rodzice
     */
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }

    /**
     * Get kodPocztowy
     *
     * @return string 
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Set miejscowosc
     *
     * @param string $miejscowosc
     * @return Rodzice
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get miejscowosc
     *
     * @return string 
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }
}
