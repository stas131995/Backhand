<?php

namespace App\Repositories;

use App\Entities\PricingEntity;
use App\DB\DB;

class PricingRepository
{
    private function mapResultToEntity(array $result): PricingEntity
    {
        $model = new PricingEntity();
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
           return $this->mapResultToEntity($row);
       }, $result);
    }
}