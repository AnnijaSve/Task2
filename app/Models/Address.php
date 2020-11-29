<?php

namespace App\Models;


class Address

{

    private string $country;
    private string $postIndex;
    private string $city;
    private string $street;
    private string $apartment;
    private ?int $id;
    private ?int $cvId;

    public function __construct(

        string $country,
        string $postIndex,
        string $city,
        string $street,
        string $apartment,
        ?int $id = null,
        ?int $cvId = null

    )
    {

        $this->id = $id;
        $this->cvId = $cvId;
        $this->country = $country;
        $this->postIndex = $postIndex;
        $this->city = $city;
        $this->street = $street;
        $this->apartment = $apartment;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getCvId(): int
    {
        return $this->id;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPostIndex(): string
    {
        return $this->postIndex;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getApartment(): string
    {
        return $this->apartment;
    }

    public static function create(array $data): Address
    {
        return new self (
            $data['country'],
            $data['postIndex'],
            $data['city'],
            $data['street'],
            $data['apartment'],
        );
    }

    public function toArray($cvId): array
    {
        return [
            'cvId' => $cvId,
            'country' => $this->country,
            'postIndex' => $this->postIndex,
            'city' => $this->city,
            'street' => $this->street,
            'apartment' => $this->apartment

        ];
    }


}