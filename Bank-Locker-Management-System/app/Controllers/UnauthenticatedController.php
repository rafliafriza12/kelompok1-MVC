<?php

namespace Kelompok1\MVC\Controllers;

use Kelompok1\MVC\App\View;
use Kelompok1\MVC\Model\UnauthenticatedModel;

class UnauthenticatedController
{
    function index(): void
    {
        $unauthenticatedModelData = new UnauthenticatedModel();
        $aboutus = $unauthenticatedModelData->getAllAboutUsData();
        $contactus = $unauthenticatedModelData->getAllContactUsData();

        include_once __DIR__ . '/../View/unauthenticated/index.php';
    }

    function searchLocker($searchinput = null): void
    {
        $unauthenticatedModelData = new UnauthenticatedModel();
        $searchResult = $unauthenticatedModelData->getSearchLocker($searchinput);
        $cnt = 1;
        $count = count($searchResult);

        
        include_once __DIR__ . '/../View/unauthenticated/search-locker-details.php';
    }
    
    function showLockerDetail($ltid = null): void
    {
        $unauthenticatedModelData = new UnauthenticatedModel();
        $ltidValue = intval($ltid);
        $lockerDetail = $unauthenticatedModelData->getLockerDetail($ltidValue);
        $cnt = 1;

        include_once __DIR__ . '/../View/unauthenticated/view-assign-locker.php';
    }
}
