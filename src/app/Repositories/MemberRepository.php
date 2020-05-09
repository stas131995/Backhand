<?php

namespace App\Repositories;

use App\DB\DB;
use App\Entities\MemberEntity;
use App\Entities\SocialEntity;

class MemberRepository
{
    private function mapResultToEntity(array $result): MemberEntity
    {
        $model = new MemberEntity();
        $model->setId($result['id']);
        $model->setFullName($result['full_name']);
        $model->setInfo($result['info']);
        $model->setImage($result['image']);
        $model->setTitle($result['title']);       
        return $model;
    }

    public function getAllWithSocials(): array
    {
        $query = DB::query(
            "SELECT members.* ,
            socials.id AS s_id,
            socials.slug AS s_slug,
            socials.link AS s_link,
            socials.member_id AS s_member_id
            FROM members
            LEFT JOIN socials
            ON members.id = socials.member_id"
        );
        $result = $query->fetch_all(MYSQLI_ASSOC);

        $resulModels = [];
        $top = 0;
        foreach ($result as $row) {
            if ($top == 0 || $resulModels[$top - 1]->getId() != $row['id']) {
                $resulModels[$top++] = $this->mapResultToEntity($row);
            }
            if ($row['s_id']) {
                $social = new SocialEntity();
                $social->setId($row['s_id']);
                $social->setSlug($row['s_slug']);
                $social->setLink($row['s_link']);
                $social->setMemberId($row['s_member_id']);
                $resulModels[$top - 1]->addSocial($social);
            }
        }
        return $resulModels;
    }
}