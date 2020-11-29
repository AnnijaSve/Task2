<?php

namespace App\Models;

class Education

{

    private string $schoolName;
    private string $facultyName;
    private string $fieldOfStudy;
    private string $levelOfEducation;
    private string $studyStatus;
    private string $timeSpentForStudy;
    private ?int $id;
    private ?int $cvId;

    public function __construct(

        string $schoolName,
        string $facultyName,
        string $fieldOfStudy,
        string $levelOfEducation,
        string $studyStatus,
        string $timeSpentForStudy,
        ?int $id = null,
        ?int $cvId = null

    )
    {
        $this->id = $id;
        $this->cvId = $cvId;
        $this->schoolName = $schoolName;
        $this->facultyName = $facultyName;
        $this->fieldOfStudy = $fieldOfStudy;
        $this->levelOfEducation = $levelOfEducation;
        $this->studyStatus = $studyStatus;
        $this->timeSpentForStudy = $timeSpentForStudy;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCvId(): int
    {
        return $this->id;
    }

    public function getSchoolName(): string
    {
        return $this->schoolName;
    }

    public function getFacultyName(): string
    {
        return $this->facultyName;
    }

    public function getFieldOfStudy(): string
    {
        return $this->fieldOfStudy;
    }

    public function getLevelOfEducation(): string
    {
        return $this->levelOfEducation;
    }

    public function getStudyStatus(): string
    {
        return $this->studyStatus;
    }

    public function getTimeSpentForStudy(): string
    {
        return $this->timeSpentForStudy;
    }

    public static function create(array $data): Education
    {
        return new self (
            $data['schoolName'],
            $data['facultyName'],
            $data['fieldOfStudy'],
            $data['levelOfEducation'],
            $data['studyStatus'],
            $data['timeSpentForStudy']
        );
    }

    public function toArray($cvId): array
    {
        return [
            'cvId' => $cvId,
            'schoolName' => $this->schoolName,
            'facultyName' => $this->facultyName,
            'fieldOfStudy' => $this->fieldOfStudy,
            'levelOfEducation' => $this->levelOfEducation,
            'studyStatus' => $this->studyStatus,
            'timeSpentForStudy' => $this->timeSpentForStudy,

        ];
    }

}