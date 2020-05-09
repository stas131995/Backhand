<?php

namespace App\Entities;

class FeatureEntity
{
    private $id;

    private $linktext;

    private $imagePath;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getLinkText(): string
    {
        return $this->linktext;
    }

    public function setLinkText(string $linktext): void
    {
        $this->linktext = $linktext;
    }

    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

}
