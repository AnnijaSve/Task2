<?php

namespace App\Repositories;

use App\Models\Address;

class AddressRepository
{
    public function getAll(): array
    {
        $addressBuilder = query()
            ->select('*')
            ->from('addresses')
            ->execute()
            ->fetchAllAssociative();

        $addresses = [];
        foreach ($addressBuilder as $address) {
            $addresses[] = Address::create($address);
        }

        return $addresses;
    }

    public function add($data, $cvId)
    {
        $address = Address::create($data);

        query()
            ->insert('addresses')
            ->values([
                'cvId' => ':cvId',
                'country' => ':country',
                'postIndex' => ':postIndex',
                'city' => ':city',
                'street' => ':street',
                'apartment' => ':apartment'
            ])
            ->setParameters($address->toArray($cvId))
            ->execute();
    }

    public function showByCvId(int $id): Address
    {
        $addressBuilder = query()
            ->select('*')
            ->from('addresses')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute()
            ->fetchAssociative();

        return $address = Address::create($addressBuilder);
    }

    public function deleteByCvId(int $id)
    {
        query()
            ->delete('addresses')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute();
    }

    public function editByCvId(int $id): Address
    {
        $addressBuilder = query()
            ->select('*')
            ->from('addresses')
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute()
            ->fetchAssociative();

        return $address = Address::create($addressBuilder);

    }

    public function updateByCvId($data, int $id)
    {
        $address = Address::create($data);

        query()
            ->update('addresses')
            ->set('country', ':country')
            ->set('postIndex', ':postIndex')
            ->set('city', ':city')
            ->set('street', ':street')
            ->set('apartment', ':apartment')
            ->setParameters($address->toArray($id))
            ->where('cvId = :cvId')
            ->setParameter('cvId', $id)
            ->execute();
    }
}