<?php

namespace App\Services;

use App\Models\Address;
use App\Models\CV;
use App\Models\Education;
use App\Models\WorkExperience;
use App\Repositories\AddressRepository;
use App\Repositories\CvRepository;
use App\Repositories\EducationRepository;
use App\Repositories\WorkExperienceRepository;

class UpdateCvService
{
    private CvRepository $cvRepository;
    private EducationRepository $educationRepository;
    private WorkExperienceRepository $workExperienceRepository;
    private AddressRepository $addressRepository;

    public function __construct()
    {
        $this->cvRepository = new CvRepository();
        $this->educationRepository = new EducationRepository();
        $this->workExperienceRepository = new WorkExperienceRepository();
        $this->addressRepository = new AddressRepository();
    }

    public function execute($data, int $id)
    {

        $this->cvRepository->update($data, $id);

        $this->educationRepository->updateByCvId($data, $id);

        $this->workExperienceRepository->updateByCvId($data, $id);

        $this->addressRepository->updateByCvId($data, $id);

    }
}

