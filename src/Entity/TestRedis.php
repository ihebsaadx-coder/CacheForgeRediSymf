<?php

namespace App\Entity;

use App\Repository\TestRedisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRedisRepository::class)]
class TestRedis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fileinputRedis = null;

    #[ORM\Column(length: 255)]
    private ?string $dropdownFast = null;

    #[ORM\Column(length: 255)]
    private ?string $ingenieurautocomplete = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFileinputRedis(): ?string
    {
        return $this->fileinputRedis;
    }

    public function setFileinputRedis(?string $fileinputRedis): static
    {
        $this->fileinputRedis = $fileinputRedis;

        return $this;
    }

    public function getDropdownFast(): ?string
    {
        return $this->dropdownFast;
    }

    public function setDropdownFast(string $dropdownFast): static
    {
        $this->dropdownFast = $dropdownFast;

        return $this;
    }

    public function getIngenieurautocomplete(): ?string
    {
        return $this->ingenieurautocomplete;
    }

    public function setIngenieurautocomplete(string $ingenieurautocomplete): static
    {
        $this->ingenieurautocomplete = $ingenieurautocomplete;

        return $this;
    }
}
