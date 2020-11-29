<?php

namespace App\Services;

use App\Models\Address;
use App\Models\CV;
use App\Models\Education;
use App\Models\WorkExperience;

class ShowOneCvServiceResponse
{
    private CV $cv;
    private Education $education;
    private WorkExperience $workExperience;
    private Address $address;

    public function __construct(CV $cv, Education $education, WorkExperience $workExperience, Address $address)
    {
        $this->cv = $cv;
        $this->education = $education;
        $this->workExperience = $workExperience;
        $this->address = $address;
    }

    public function getCv(): CV
    {
        return $this->cv;
    }

    public function getEducation(): Education
    {
        return $this->education;
    }

    public function getWorkExperience(): WorkExperience
    {
        return $this->workExperience;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

}