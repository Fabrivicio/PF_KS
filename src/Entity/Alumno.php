<?php

namespace App\Entity;

use App\Repository\AlumnoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlumnoRepository::class)]
class Alumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idAlumno = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apeliidoPaterno = null;

    #[ORM\Column(length: 255)]
    private ?string $ApellidoMaterno = null;

    #[ORM\Column]
    private ?int $dni = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAlumno(): ?int
    {
        return $this->idAlumno;
    }

    public function setIdAlumno(int $idAlumno): static
    {
        $this->idAlumno = $idAlumno;

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

    public function getApeliidoPaterno(): ?string
    {
        return $this->apeliidoPaterno;
    }

    public function setApeliidoPaterno(string $apeliidoPaterno): static
    {
        $this->apeliidoPaterno = $apeliidoPaterno;

        return $this;
    }

    public function getApellidoMaterno(): ?string
    {
        return $this->ApellidoMaterno;
    }

    public function setApellidoMaterno(string $ApellidoMaterno): static
    {
        $this->ApellidoMaterno = $ApellidoMaterno;

        return $this;
    }

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(int $dni): static
    {
        $this->dni = $dni;

        return $this;
    }
}
