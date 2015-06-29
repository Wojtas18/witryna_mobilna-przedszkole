<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posilki
 *
 * @ORM\Table(name="posilki", indexes={@ORM\Index(name="pcpfk", columns={"typ_posilku"})})
 * @ORM\Entity
 */
class Posilki
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_posilku", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPosilku;

    /**
     * @var \CennikPosilkow
     *
     * @ORM\ManyToOne(targetEntity="CennikPosilkow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typ_posilku", referencedColumnName="typ_posilku")
     * })
     */
    private $typPosilku;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dzieci", mappedBy="idPosilku")
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
     * Get idPosilku
     *
     * @return integer 
     */
    public function getIdPosilku()
    {
        return $this->idPosilku;
    }

    /**
     * Set typPosilku
     *
     * @param \Acme\DemoBundle\Entity\CennikPosilkow $typPosilku
     * @return Posilki
     */
    public function setTypPosilku(\Acme\DemoBundle\Entity\CennikPosilkow $typPosilku = null)
    {
        $this->typPosilku = $typPosilku;

        return $this;
    }

    /**
     * Get typPosilku
     *
     * @return \Acme\DemoBundle\Entity\CennikPosilkow 
     */
    public function getTypPosilku()
    {
        return $this->typPosilku;
    }

    /**
     * Add idDziecka
     *
     * @param \Acme\DemoBundle\Entity\Dzieci $idDziecka
     * @return Posilki
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
