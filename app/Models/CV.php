<?php

namespace App\Models;

class CV
{
    private int $id;
    private string $personName;
    private string $surname;
    private string $phoneNumber;
    private string $email;

    public function __construct(
        int $id,
        string $personName,
        string $surname,
        string $phoneNumber,
        string $email
    )
    {
        $this->id = $id;
        $this->personName = $personName;
        $this->surname = $surname;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPersonName(): string
    {
        return $this->personName;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public static function create(array $data): CV
    {
        return new self (
            (int)$data['id'],
            $data['personName'],
            $data['surname'],
            $data['phoneNumber'],
            $data['email'],
        );
    }

    public function toArray(): array
    {
        return [
            'personName' => $this->personName,
            'surname' => $this->surname,
            'phoneNumber' => $this->phoneNumber,
            'email' => $this->email,
        ];
    }

}