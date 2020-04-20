<?php

namespace App\Repositories;

use App\Models\FeaturesModel;
use App\DB\DB;

class FeaturesRepository
{
    private function mapResultToModel(array $result): FeaturesModel
    {
        $model = new FeaturesModel();
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
           return $this->mapResultToModel($row);
       }, $result);
    }
}