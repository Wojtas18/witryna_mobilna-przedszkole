<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DzieciObecnosci
 *
 * @ORM\Table(name="dzieci_obecnosci", indexes={@ORM\Index(name="IDX_423111A6F846B489", columns={"id_dziecka"})})
 * @ORM\Entity
 */
class DzieciObecnosci
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $data = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="obecny", type="string", length=3, nullable=true)
     */
    private $obecny;

    /**
     * @var \Dzieci
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Dzieci")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dziecka", referencedColumnName="id_dziecka")
     * })
     */
    private $idDziecka;



    /**
     * Set data
     *
     * @param \DateTime $data
     * @return DzieciObecnosci
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
     * Set obecny
     *
     * @param string $obecny
     * @return DzieciObecnosci
     */
    public function setObecny($obecny)
    {
        $this->obecny = $obecny;

        return $this;
    }

    /**
     * Get obecny
     *
     * @return string 
     */
    public function getObecny()
    {
        return $this->obecny;
    }

    /**
     * Set idDziecka
     *
     * @param \Acme\DemoBundle\Entity\Dzieci $idDziecka
     * @return DzieciObecnosci
     */
    public function setIdDziecka(\Acme\DemoBundle\Entity\Dzieci $idDziecka)
    {
        $this->idDziecka = $idDziecka;

        return $this;
    }

    /**
     * Get idDziecka
     *
     * @return \Acme\DemoBundle\Entity\Dzieci 
     */
    public function getIdDziecka()
    {
        return $this->idDziecka;
    }
}
