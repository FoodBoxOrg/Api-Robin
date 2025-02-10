<?php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity]
class Departement
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private ?int $num = null;

    #[ORM\Column(type: 'string')]
    public string $name = '';

    public function setNum(int $num): self
    {
        $this->num = $num;
        return $this;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
