<?php

namespace App\Repositories;

use App\Models\CarouselModel;
use App\DB\DB;

class CarouselRepository
{
    private function mapResultToModel(array $result): CarouselModel
    {
        $model = new CarouselModel();
        $model->setId($result['id']);
        $model->setTitle($result['title']);
        $model->setDescription($result['description']);
        $model->setLinktext($result['linktext']);
        return $model;
    }

    public function getAll(): array
    {
       $query = DB::query(
           "SELECT * 
           FROM carousel"
       );
       $result = $query->fetch_all(MYSQLI_ASSOC);
       return array_map(function ($row) {
           return $this->mapResultToModel($row);
       }, $result);
    }
}