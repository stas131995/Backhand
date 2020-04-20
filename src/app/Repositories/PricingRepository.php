<?php

namespace App\Repositories;

use App\Models\PricingModel;
use App\DB\DB;

class PricingRepository
{
    private function mapResultToModel(array $result): PricingModel
    {
        $model = new PricingModel();
        $model->setId($result['id']);
        $model->setTitle($result['title']);
        $model->setDescription($result['description']);
        $model->setCurrency($result['currency']);
        $model->setPrice($result['price']);
        return $model;
    }

    public function getAll(): array
    {
       $query = DB::query(
           "SELECT * 
           FROM pricing"
       );
       $result = $query->fetch_all(MYSQLI_ASSOC);
       return array_map(function ($row) {
           return $this->mapResultToModel($row);
       }, $result);
    }
}