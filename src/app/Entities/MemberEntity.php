<?php

namespace App\Entities;

class MemberEntity
{
    private $id;

    private $full_name;

    private $image;

    private $info;

    private $title; 
    
    private $socials = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getFullName(): string
    {
        return $this->full_name;
    }

    public function setFullName(string $full_name): void
    {
        $this->full_name = $full_name;
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function setInfo(string $info): void
    {
        $this->info = $info;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


    public function getSocials(): array
    {
        return $this->socials;
    }

    public function setSocials(array $socials): void
    {
        $this->socials = $socials;
    }

    public function addSocial(SocialEntity $social): void
    {
        $this->socials[] = $social;
    }

}
