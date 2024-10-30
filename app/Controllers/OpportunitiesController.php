<?php

namespace App\Controllers;

require __DIR__ . '/../Models/Opportunities.php';
use App\Models\Opportunities;

class OpportunitiesController
{
    protected $opportunitiesModel;

    public function __construct()
    {
        $this->opportunitiesModel = new Opportunities();
    }
    public function getOpportunities()
    {

        $opportunities = $this->opportunitiesModel->getAll($this->opportunitiesModel->getTable());
        return $opportunities;
    }
}
