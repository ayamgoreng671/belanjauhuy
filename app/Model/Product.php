<?php

namespace Model;

class Product
{
    private ?int $id = null;
    private ?string $name = null;
    private ?string $slug = null;
    private ?int $stock = null;
    private ?string $description = null;
    private ?int $categoryId = null;

    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?string $slug = null,
        ?int $stock = null,
        ?string $description = null,
        ?int $categoryId = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->stock = $stock;
        $this->description = $description;
        $this->categoryId = $categoryId;
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

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
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

    public function setStock(?int $stock): void
    {
        $this->stock = $stock;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }
}