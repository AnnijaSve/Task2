<?php

namespace App\Services;

use App\Repositories\AddressRepository;
use App\Repositories\CvRepository;
use App\Repositories\EducationRepository;
use App\Repositories\WorkExperienceRepository;


class AddCvService
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

    public function execute($data)
    {
        $db = database();
        $this->cvRepository->add($db, $data);
        $cvId = $db->lastInsertId();

        $this->educationRepository->add($data, $cvId);

        $this->workExperienceRepository->add($data, $cvId);

        $this->addressRepository->add($data, $cvId);
    }
}