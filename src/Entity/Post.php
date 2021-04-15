<?php

namespace App\Entity;

use App\Repository\PostRepository;
use App\Entity\Reclamation;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
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
     * @var \App\Entity\Reclamation
     * @ORM\ManyToOne(targetEntity="Reclamation", inversedBy="$id")
     */
    private $reclamation;

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
     * @return \App\Entity\Reclamation
     */
    public function getReclamation(): \App\Entity\Reclamation
    {
        return $this->reclamation;
    }

    /**
     * @param \App\Entity\Reclamation $reclamation
     */
    public function setReclamation(\App\Entity\Reclamation $reclamation): void
    {
        $this->reclamation = $reclamation;
    }


}
