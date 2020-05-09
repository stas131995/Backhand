<?php

namespace App\Repositories;

use App\Entities\FeatureEntity;
use App\DB\DB;

class FeatureRepository
{
    private function mapResultToEntity(array $result): FeatureEntity
    {
        $model = new FeatureEntity();
        $model->setId($result['id']);
        $model->setLinkText($result['linktext']);
        $model->setImagePath($result['imagePath']);
        return $model;
    }

    public function getAll(): array
    {
       $query = DB::query(
           "SELECT * 
           FROM features"
       );
       $result = $query->fetch_all(MYSQLI_ASSOC);
       return array_map(function ($row) {
           return $this->mapResultToEntity($row);
       }, $result);
    }
}