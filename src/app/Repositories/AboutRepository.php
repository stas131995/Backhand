<?php

namespace App\Repositories;

use App\Models\AboutModel;
use App\DB\DB;

class AboutRepository
{
    private function mapResultToModel(array $result): AboutModel
    {
        $model = new AboutModel();
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
           return $this->mapResultToModel($row);
       }, $result);
    }
}