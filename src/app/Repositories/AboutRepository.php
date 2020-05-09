<?php

namespace App\Repositories;

use App\Entities\AboutEntity;
use App\DB\DB;

class AboutRepository
{
    private function mapResultToEntity(array $result): AboutEntity
    {
        $model = new AboutEntity();
        $model->setId($result['id']);
        $model->setTitle($result['title']);
        $model->setDescription($result['description']);
        $model->setImagePath($result['imagePath']);
        return $model;
    }

    public function getAll(): array
    {
       $query = DB::query(
           "SELECT * 
           FROM about"
       );
       $result = $query->fetch_all(MYSQLI_ASSOC);
       return array_map(function ($row) {
           return $this->mapResultToEntity($row);
       }, $result);
    }
}