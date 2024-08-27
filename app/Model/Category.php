<?php

namespace Model;

class Category
{
    private ?int $id = null;
    private ?string $name = null;
    private ?string $slug = null;
    private ?string $image = null;

    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?string $slug = null,
        ?string $image = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->image = $image;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
}