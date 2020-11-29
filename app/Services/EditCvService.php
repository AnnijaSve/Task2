<?php

namespace App\Services;

use App\Repositories\AddressRepository;
use App\Repositories\CvRepository;
use App\Repositories\EducationRepository;
use App\Repositories\WorkExperienceRepository;

class EditCvService
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

    public function execute(int $id): ShowOneCvServiceResponse
    {
        $cv = $this->CvRepository->edit($id);
        $education = $this->educationRepository->editByCvId($id);
        $address = $this->addressRepository->editByCvId($id);
        $workExperience = $this->workExperienceRepository->editByCvId($id);

        return new ShowOneCvServiceResponse($cv, $education, $workExperience, $address);
    }

}