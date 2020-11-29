<?php

namespace App\Controllers;

use App\Services\AddCvService;
use App\Services\DeleteCvService;
use App\Services\EditCvService;
use App\Services\ShowAllCvsService;
use App\Services\ShowOneCvService;
use App\Services\UpdateCvService;

class CvController

{
    public function show()
    {
        $response = (new ShowAllCvsService())->execute();

        $cvs = $response->getCvs();

        return require_once __DIR__ . '/../Views/ShowCvView.php';
    }

    public function showOne(array $vars)
    {
        $response = (new ShowOneCvService())->execute((int)$vars['id']);

        $cv = $response->getCv();

        $education = $response->getEducation();

        $workExperience = $response->getWorkExperience();

        $address = $response->getAddress();

        return require_once __DIR__ . '/../Views/ShowOneCvView.php';
    }

    public function add()
    {
        return require_once __DIR__ . '/../Views/AddCvView.php';
    }

    public function addNew()
    {
        (new AddCvService())->execute($_POST);

        header('Location: /');
    }

    public function delete(array $vars)
    {
        (new DeleteCvService())->execute((int)$vars['id']);

        header('Location: /');
    }

    public function edit(array $vars)
    {
        $response = (new EditCvService())->execute((int)$vars['id']);
        $cv = $response->getCv();
        $education = $response->getEducation();
        $workExperience = $response->getWorkExperience();
        $address = $response->getAddress();

        return require_once __DIR__ . '/../Views/EditCvView.php';
    }

    public function update(array $vars)
    {
        (new UpdateCvService())->execute($_POST, (int)$vars['id']);

        header('Location: /');
    }

}