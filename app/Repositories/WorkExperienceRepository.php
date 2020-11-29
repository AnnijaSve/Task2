<?php

namespace App\Repositories;

use App\Models\WorkExperience;

class WorkExperienceRepository
{

    public function getAll(): array
    {
        $workExperienceBuilder = query()
            ->select('*')
            ->from('work_experiences')
            ->execute()
            ->fetchAllAssociative();

        $workExperiences = [];
        foreach ($workExperienceBuilder as $workExperience) {
            $workExperiences[] = WorkExperience::create($workExperience);
        }

        return $workExperiences;
    }

    public function add($data, $cvId)
    {
        $workExperience = WorkExperience::create($data);

        query()
            ->insert('work_experiences')
            ->values([
                'cvId' => ':cvId',
                'workPlaceName' => ':workPlaceName',
                'workPosition' => ':workPosition',
                'workLoad' => ':workLoad',
                'workExperience' => ':workExperience',
                'skillsAchievements' => ':skillsAchievements',
            ])
            ->setParameters($workExperience->toArray($cvId))
            ->execute();
    }

    public function showByCvId(int $id): WorkExperience
    {
        $workExperienceBuilder = query()
            ->select('*')
            ->from('work_experiences')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute()
            ->fetchAssociative();

        return $workExperience = WorkExperience::create($workExperienceBuilder);
    }

    public function deleteByCvId(int $id)
    {
        query()
            ->delete('work_experiences')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute();
    }

    public function editByCvId(int $id): WorkExperience
    {
        $workExperienceBuilder = query()
            ->select('*')
            ->from('work_experiences')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute()
            ->fetchAssociative();

        return $workExperience = WorkExperience::create($workExperienceBuilder);
    }

    public function updateByCvId($data, int $id)
    {
        $workExperience = WorkExperience::create($data);

        query()
            ->update('work_experiences')
            ->set('workPlaceName', ':workPlaceName')
            ->set('workPosition', ':workPosition')
            ->set('workLoad', ':workLoad')
            ->set('workExperience', ':workExperience')
            ->set('skillsAchievements', ':skillsAchievements')
            ->setParameters($workExperience->toArray($id))
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute();
    }

}