<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_nr = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mobile_nr = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $first_name = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insertion_name = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $last_name = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zip = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country = null;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getTelNr(): ?string
    {
        return $this->tel_nr;
    }

    public function setTelNr(string $tel_nr): self
    {
        $this->tel_nr = $tel_nr;

        return $this;
    }

    public function getMobileNr(): ?string
    {
        return $this->mobile_nr;
    }

    public function setMobileNr(string $mobile_nr): self
    {
        $this->mobile_nr = $mobile_nr;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getInsertionName(): ?string
    {
        return $this->insertion_name;
    }

    public function setInsertionName(string $insertion_name): self
    {
        $this->insertion_name = $insertion_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }
}