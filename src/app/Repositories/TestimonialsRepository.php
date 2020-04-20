<?php

namespace App\Repositories;

use App\Models\TestimonialsModel;
use App\DB\DB;

class TestimonialsRepository
{
    private function mapResultToModel(array $result): TestimonialsModel
    {
        $model = new TestimonialsModel();
        $model->setId($result['id']);
        $model->setTitle($result['title']);
        $model->setCustomerName($result['customerName']);
        $model->setCustomerCountry($result['customerCountry']);
        $model->setImagePath($result['imagePath']);
        return $model;
    }

    public function getAll(): array
    {
       $query = DB::query(
           "SELECT * 
           FROM testimonials"
       );
       $result = $query->fetch_all(MYSQLI_ASSOC);
       return array_map(function ($row) {
           return $this->mapResultToModel($row);
       }, $result);
    }
}