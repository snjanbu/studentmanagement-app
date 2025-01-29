<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    protected $resourceName;
    protected $singularResourceName;

    public function __construct()
    {
        $data = [
            'resourceName' => $this->resourceName,
            'singularResource' => $this->singularResourceName
        ];
        // Add data to be passed to all views
        view()->share('data', $data);
    }
}