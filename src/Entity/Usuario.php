<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    private ?array $id_json = null;

    public function __construct(?string $nombre = null, ?array $id_json = null)
    {
        $this->nombre = $nombre;
        $this->id_json = $id_json;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getIdJson(): ?array
    {
        return $this->id_json;
    }

    public function setIdJson(?array $id_json): self
    {
        $this->id_json = $id_json;

        return $this;
    }
}
