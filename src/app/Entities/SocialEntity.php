<?php

namespace App\Entities;

class SocialEntity
{
    private $id;

    private $slug;

    private $link;

    private $member_id; 

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getMemberId(): int
    {
        return $this->member_id;
    }

    public function setMemberId(int $member_id): void
    {
        $this->member_id = $member_id;
    }
}
