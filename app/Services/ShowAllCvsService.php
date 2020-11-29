<?php
namespace App\Services;

use App\Repositories\AddressRepository;
use App\Repositories\CvRepository;
use App\Repositories\EducationRepository;
use App\Repositories\WorkExperienceRepository;

class ShowAllCvsService
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

    public function execute() : ShowAllCvsServiceResponse
    {
         $cvs = $this->CvRepository->getAll();
         $educations = $this->educationRepository->getAll();
        $addresses = $this->addressRepository->getAll();
        $workExperiences = $this->workExperienceRepository->getAll();

        return new ShowAllCvsServiceResponse($cvs, $educations, $addresses, $workExperiences);
    }


}