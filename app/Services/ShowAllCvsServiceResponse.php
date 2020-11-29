<?php

namespace App\Services;

class ShowAllCvsServiceResponse
{
    private array $cvs;
    private array $educations;
    private array $addresses;
    private array $workExperiences;

    public function __construct(array $cvs, array $educations, array $addresses, array $workExperiences)
    {
        $this->cvs = $cvs;
        $this->educations = $educations;
        $this->addresses = $addresses;
        $this->workExperiences = $workExperiences;
    }

    public function getCvs(): array
    {
        return $this->cvs;
    }

    public function getEducations(): array
    {
        return $this->educations;
    }

    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function getWorkExperiences(): array
    {
        return $this->workExperiences;
    }

}