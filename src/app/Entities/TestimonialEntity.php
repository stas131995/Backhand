<?php

namespace App\Entities;

class TestimonialEntity
{
    private $id;

    private $title;

    private $customerName;

    private $customerCountry;

    private $imagePath;

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

    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function setCustomerName(string $customerName): void
    {
        $this->customerName = "@".$customerName;
    }

    public function getCustomerCountry(): string
    {
        return $this->customerCountry;
    }

    public function setCustomerCountry(string $customerCountry): void
    {
        $this->customerCountry = $customerCountry;
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
