<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="name")
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="shortname")
     */
    private $shortname;


    /**
     * @ORM\Column(type="string", name="reknown")
     */
    private $reknown;

    /**
     * @ORM\Column(type="text", name="bio")
     */
    private $bio;

    /**
     * @ORM\Column(type="string", name="image")
     */
    private $image;
// -------------------------------------------------------------------------------------------------------
// getter/setter

    public function getId(): ?int
    {
        return $this->id;
    }
// -------------------------------------------------------------------

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
// -------------------------------------------------------------------

    public function getShortname(): ?string
    {
        return $this->shortname;
    }

    public function setShortname(string $shortname): self
    {
        $this->shortname= $shortname;

        return $this;
    }
// -------------------------------------------------------------------
    public function getReknown(): ?string
    {
        return $this->reknown;
    }

    public function setReknown(?string $reknown): self
    {
        $this->reknown = $reknown;

        return $this;
    }
// -------------------------------------------------------------------
    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }
// -------------------------------------------------------------------
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

}