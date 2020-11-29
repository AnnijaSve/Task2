<?php

namespace App\Repositories;

use App\Models\CV;

class CvRepository
{
    public function getAll(): array
    {
        $cvDataBuilder = query()
            ->select('*')
            ->from('cvs')
            ->execute()
            ->fetchAllAssociative();

        $cvs = [];
        foreach ($cvDataBuilder as $cv) {
            $cvs[] = CV::create($cv);
        }

        return $cvs;
    }

    public function add($db, $data)
    {
        $cv = CV::create($data);

        $db->createQueryBuilder()
            ->insert('cvs')
            ->values([
                'personName' => ':personName',
                'surname' => ':surname',
                'phoneNumber' => ':phoneNumber',
                'email' => ':email',
            ])
            ->setParameters($cv->toArray())
            ->execute();
    }

    public function showOne(int $id): CV
    {
        $cvBuilder = query()
            ->select('*')
            ->from('cvs')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute()
            ->fetchAssociative();

        return $cv = CV::create($cvBuilder);

    }

    public function delete(int $id)
    {
        query()
            ->delete('cvs')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute();
    }

    public function edit(int $id): CV
    {
        $cvBuilder = query()
            ->select('*')
            ->from('cvs')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute()
            ->fetchAssociative();

        return $cv = CV::create($cvBuilder);
    }

    public function update($data, $id)
    {
        $cv = CV::create($data);
        query()
            ->update('cvs')
            ->set('personName', ':personName')
            ->set('surname', ':surname')
            ->set('phoneNumber', ':phoneNumber')
            ->set('email', ':email')
            ->setParameters($cv->toArray())
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute();

    }

}