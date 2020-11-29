<?php

namespace App\Repositories;

use App\Models\Education;

class EducationRepository

{
    public function getAll(): array
    {
        $educationBuilder = query()
            ->select('*')
            ->from('educations')
            ->execute()
            ->fetchAllAssociative();

        $educations = [];
        foreach ($educationBuilder as $education) {
            $educations[] = Education::create($education);
        }
        return $educations;
    }

    public function add($data, $cvId)
    {

        $education = Education::create($data);

        query()
            ->insert('educations')
            ->values([
                'cvId' => ':cvId',
                'schoolName' => ':schoolName',
                'facultyName' => ':facultyName',
                'fieldOfStudy' => ':fieldOfStudy',
                'levelOfEducation' => ':levelOfEducation',
                'studyStatus' => ':studyStatus',
                'timeSpentForStudy' => ':timeSpentForStudy',
            ])
            ->setParameters($education->toArray($cvId))
            ->execute();
    }

    public function showByCvId(int $id): Education
    {
        $educationBuilder = query()
            ->select('*')
            ->from('educations')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute()
            ->fetchAssociative();

        return $education = Education::create($educationBuilder);
    }

    public function deleteByCvId(int $id)
    {
        query()
            ->delete('educations')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute();
    }

    public function editByCvId(int $id): Education
    {
        $educationBuilder = query()
            ->select('*')
            ->from('educations')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute()
            ->fetchAssociative();

        return $education = Education::create($educationBuilder);
    }

    public function updateByCvId($data, int $id)
    {
        $education = Education::create($data);

        query()
            ->update('educations')
            ->set('schoolName', ':schoolName')
            ->set('facultyName', ':facultyName')
            ->set('fieldOfStudy', ':fieldOfStudy')
            ->set('levelOfEducation', ':levelOfEducation')
            ->set('studyStatus', ':studyStatus')
            ->set('timeSpentForStudy', ':timeSpentForStudy')
            ->setParameters($education->toArray($id))
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute();
    }
}