<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EventsController extends BaseController
{
    public function index()
    {
        return view('events/index', ['title' => 'Events']);
    }
}
