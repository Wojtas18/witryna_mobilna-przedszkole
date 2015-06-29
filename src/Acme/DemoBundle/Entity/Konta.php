<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Konta
 *
 * @ORM\Table(name="konta")
 * @ORM\Entity
 */
class Konta
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=10, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="haslo", type="string", length=10, nullable=false)
     */
    private $haslo;

    /**
     * @var \Rodzice
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Rodzice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rodzica", referencedColumnName="id_rodzica")
     * })
     */
    private $idRodzica;



    /**
     * Set login
     *
     * @param string $login
     * @return Konta
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     * @return Konta
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Get haslo
     *
     * @return string 
     */
    public function getHaslo()
    {
        return $this->haslo;
    }

    /**
     * Set idRodzica
     *
     * @param \Acme\DemoBundle\Entity\Rodzice $idRodzica
     * @return Konta
     */
    public function setIdRodzica(\Acme\DemoBundle\Entity\Rodzice $idRodzica)
    {
        $this->idRodzica = $idRodzica;

        return $this;
    }

    /**
     * Get idRodzica
     *
     * @return \Acme\DemoBundle\Entity\Rodzice 
     */
    public function getIdRodzica()
    {
        return $this->idRodzica;
    }
}
