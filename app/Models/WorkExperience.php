<?php

namespace App\Models;

class WorkExperience

{
    private string $workPlaceName;
    private string $workPosition;
    private string $workLoad;
    private string $workExperience;
    private string $skillsAchievements;
    private ?int $id;
    private ?int $cvId;

    public function __construct(

        string $workPlaceName,
        string $workPosition,
        string $workLoad,
        string $workExperience,
        string $skillsAchievements,
        ?int $id = null,
        ?int $cvId = null


    )
    {

        $this->id = $id;
        $this->cvId = $cvId;
        $this->workPlaceName = $workPlaceName;
        $this->workPosition = $workPosition;
        $this->workLoad = $workLoad;
        $this->workExperience = $workExperience;
        $this->skillsAchievements = $skillsAchievements;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCvId(): int
    {
        return $this->id;
    }


    public function getWorkPlaceName(): string
    {
        return $this->workPlaceName;
    }

    public function getWorkPosition(): string
    {
        return $this->workPosition;
    }

    public function getWorkLoad(): string
    {
        return $this->workLoad;
    }

    public function getWorkExperience(): string
    {
        return $this->workExperience;
    }

    public function getSkillsAchievements(): string
    {
        return $this->skillsAchievements;
    }

    public static function create(array $data): WorkExperience
    {
        return new self (
            $data['workPlaceName'],
            $data['workPosition'],
            $data['workLoad'],
            $data['workExperience'],
            $data['skillsAchievements'],

        );
    }

    public function toArray($cvId): array
    {
        return [
            'cvId' => $cvId,
            'workPlaceName' => $this->workPlaceName,
            'workPosition' => $this->workPosition,
            'workLoad' => $this->workLoad,
            'workExperience' => $this->workExperience,
            'skillsAchievements' => $this->skillsAchievements,

        ];
    }
}