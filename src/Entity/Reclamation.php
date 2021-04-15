<?php

namespace App\Entity;
use App\Entity\Users;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @Assert\NotBlank(message="fullname is required , must be filled")
     * @ORM\Column(type="string", length=255)
     */
    private $fullname;
    /**
     * @Assert\NotBlank(message="age is required , must be filled")
     * @ORM\Column(type="integer", length=255)
     */
    private $age;
    /**
     * @Assert\NotBlank(message="cin is required , must be filled")
     * @ORM\Column(type="integer", length=255)
     */
    private $cin;
    /**
     * @Assert\NotBlank(message="adress is required , must be filled")
     * @ORM\Column(type="string", length=255)
     */
    private $adress;
    /**
     * @Assert\NotBlank(message="phone is required , must be filled")
     * @ORM\Column(type="string", length=255)
     */
    private $phone;
    /**
     * @Assert\NotBlank(message="description is required , must be filled")
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf", "application/x-pdf", "image/png", "image/jpeg", "image/svg+xml"},
     *     mimeTypesMessage = "You can only be allowed to upload Image file or PDF file"
     * )
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $source;
    /**
     * @var Users
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="$id")
     */
    private $users;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname): void
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin): void
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress): void
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return \App\Entity\Users
     */
    public function getUsers(): \App\Entity\Users
    {
        return $this->users;
    }

    /**
     * @param \App\Entity\Users $users
     */
    public function setUsers(\App\Entity\Users $users): void
    {
        $this->users = $users;
    }





}
