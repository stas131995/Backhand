<?php

namespace App\Models;

class CarouselModel
{
    private $id;

    private $title;

    private $description;

    private $linktext;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getLinktext(): string
    {
        return $this->linktext;
    }

    public function setLinktext(string $linktext): void
    {
        $this->linktext = $linktext;
    }

}
