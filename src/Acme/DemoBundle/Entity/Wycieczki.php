<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wycieczki
 *
 * @ORM\Table(name="wycieczki")
 * @ORM\Entity
 */
class Wycieczki
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_wycieczki", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWycieczki;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_wycieczki", type="string", length=20, nullable=false)
     */
    private $nazwaWycieczki;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="cena", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $cena;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dzieci", mappedBy="idWycieczki")
     */
    private $idDziecka;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDziecka = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idWycieczki
     *
     * @return integer 
     */
    public function getIdWycieczki()
    {
        return $this->idWycieczki;
    }

    /**
     * Set nazwaWycieczki
     *
     * @param string $nazwaWycieczki
     * @return Wycieczki
     */
    public function setNazwaWycieczki($nazwaWycieczki)
    {
        $this->nazwaWycieczki = $nazwaWycieczki;

        return $this;
    }

    /**
     * Get nazwaWycieczki
     *
     * @return string 
     */
    public function getNazwaWycieczki()
    {
        return $this->nazwaWycieczki;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Wycieczki
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set cena
     *
     * @param string $cena
     * @return Wycieczki
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return string 
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Add idDziecka
     *
     * @param \Acme\DemoBundle\Entity\Dzieci $idDziecka
     * @return Wycieczki
     */
    public function addIdDziecka(\Acme\DemoBundle\Entity\Dzieci $idDziecka)
    {
        $this->idDziecka[] = $idDziecka;

        return $this;
    }

    /**
     * Remove idDziecka
     *
     * @param \Acme\DemoBundle\Entity\Dzieci $idDziecka
     */
    public function removeIdDziecka(\Acme\DemoBundle\Entity\Dzieci $idDziecka)
    {
        $this->idDziecka->removeElement($idDziecka);
    }

    /**
     * Get idDziecka
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdDziecka()
    {
        return $this->idDziecka;
    }
}
