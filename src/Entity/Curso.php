<?php

namespace App\Entity;

use App\Repository\CursoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
#[ORM\Entity(repositoryClass: CursoRepository::class)]
class Curso
{
    private $user;

    // ...

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }




    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idCurso = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $creditos = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCurso(): ?int
    {
        return $this->idCurso;
    }

    public function setIdCurso(int $idCurso): static
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCreditos(): ?int
    {
        return $this->creditos;
    }

    public function setCreditos(int $creditos): static
    {
        $this->creditos = $creditos;

        return $this;
    }
}
