<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dzieci
 *
 * @ORM\Table(name="dzieci")
 * @ORM\Entity
 */
class Dzieci
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dziecka", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDziecka;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rodzica", type="bigint", nullable=false)
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_urodzenia", type="date", nullable=true)
     */
    private $dataUrodzenia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\DemoBundle\Entity\Posilki", inversedBy="idDziecka")
     * @ORM\JoinTable(name="dzieci_posilki",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_dziecka", referencedColumnName="id_dziecka")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_posilku", referencedColumnName="id_posilku")
     *   }
     * )
     */
    private $idPosilku;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\DemoBundle\Entity\Wycieczki", inversedBy="idDziecka")
     * @ORM\JoinTable(name="dzieci_wycieczki",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_dziecka", referencedColumnName="id_dziecka")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_wycieczki", referencedColumnName="id_wycieczki")
     *   }
     * )
     */
    private $idWycieczki;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPosilku = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idWycieczki = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idDziecka
     *
     * @return integer 
     */
    public function getIdDziecka()
    {
        return $this->idDziecka;
    }

    /**
     * Set idRodzica
     *
     * @param integer $idRodzica
     * @return Dzieci
     */
    public function setIdRodzica($idRodzica)
    {
        $this->idRodzica = $idRodzica;

        return $this;
    }

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
     * @return Dzieci
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
     * @return Dzieci
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
     * Set dataUrodzenia
     *
     * @param \DateTime $dataUrodzenia
     * @return Dzieci
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
     * Add idPosilku
     *
     * @param \Acme\DemoBundle\Entity\Posilki $idPosilku
     * @return Dzieci
     */
    public function addIdPosilku(\Acme\DemoBundle\Entity\Posilki $idPosilku)
    {
        $this->idPosilku[] = $idPosilku;

        return $this;
    }

    /**
     * Remove idPosilku
     *
     * @param \Acme\DemoBundle\Entity\Posilki $idPosilku
     */
    public function removeIdPosilku(\Acme\DemoBundle\Entity\Posilki $idPosilku)
    {
        $this->idPosilku->removeElement($idPosilku);
    }

    /**
     * Get idPosilku
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPosilku()
    {
        return $this->idPosilku;
    }

    /**
     * Add idWycieczki
     *
     * @param \Acme\DemoBundle\Entity\Wycieczki $idWycieczki
     * @return Dzieci
     */
    public function addIdWycieczki(\Acme\DemoBundle\Entity\Wycieczki $idWycieczki)
    {
        $this->idWycieczki[] = $idWycieczki;

        return $this;
    }

    /**
     * Remove idWycieczki
     *
     * @param \Acme\DemoBundle\Entity\Wycieczki $idWycieczki
     */
    public function removeIdWycieczki(\Acme\DemoBundle\Entity\Wycieczki $idWycieczki)
    {
        $this->idWycieczki->removeElement($idWycieczki);
    }

    /**
     * Get idWycieczki
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdWycieczki()
    {
        return $this->idWycieczki;
    }
}
