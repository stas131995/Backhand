<?php

namespace App\Repositories;

use App\Entities\LoginEntity;
use App\DB\DB;

class LoginRepository
{
    private function mapResultToEntity(array $result): LoginEntity
    {
        $model = new LoginEntity();
        $model->setId($result['id']);
        $model->setPassword($result['password']);
        $model->setUsername($result['username']);
        return $model;
    }

    public function getByUsername(string $username)
    {
        $query = DB::query(
            "SELECT  * 
            FROM users 
            WHERE username = '{$username}' 
            LIMIT 1"
        );
        $result = $query->fetch_assoc();
        if ($result) {
            return $this->mapResultToEntity($result);
        }
        return null;
    }
}