<?php

namespace App\Services;

use App\Repositories\AddressRepository;
use App\Repositories\CvRepository;
use App\Repositories\EducationRepository;
use App\Repositories\WorkExperienceRepository;

class DeleteCvService
{
    private CvRepository $CvRepository;
    private EducationRepository $educationRepository;
    private WorkExperienceRepository $workExperienceRepository;
    private AddressRepository $addressRepository;

    public function __construct()
    {
        $this->CvRepository = new CvRepository();
        $this->educationRepository = new EducationRepository();
        $this->workExperienceRepository = new WorkExperienceRepository();
        $this->addressRepository = new AddressRepository();
    }

    public function execute(int $id)
    {
        $this->CvRepository->delete($id);
        $this->educationRepository->deleteByCvId($id);
        $this->workExperienceRepository->deleteByCvId($id);
        $this->addressRepository->deleteByCvId($id);
    }

}