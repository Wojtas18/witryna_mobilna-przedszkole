<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CennikPosilkow
 *
 * @ORM\Table(name="cennik_posilkow")
 * @ORM\Entity
 */
class CennikPosilkow
{
    /**
     * @var string
     *
     * @ORM\Column(name="typ_posilku", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typPosilku;

    /**
     * @var string
     *
     * @ORM\Column(name="cena", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $cena;



    /**
     * Get typPosilku
     *
     * @return string 
     */
    public function getTypPosilku()
    {
        return $this->typPosilku;
    }

    /**
     * Set cena
     *
     * @param string $cena
     * @return CennikPosilkow
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
}
