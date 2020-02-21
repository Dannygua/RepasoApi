<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ResRepository")
 */
class Res
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $res;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRes(): ?string
    {
        return $this->res;
    }

    public function setRes(?string $res): self
    {
        $this->res = $res;

        return $this;
    }
}
