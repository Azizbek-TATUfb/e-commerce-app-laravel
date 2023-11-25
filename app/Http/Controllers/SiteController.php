<?php

namespace App\Http\Controllers;

use App\Models\Admin\ReferencesType;
use App\Repositories\NewsRepository;
use App\Repositories\PartnersRepository;
use App\Repositories\ReferenceRepository;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('welcome');
    }
}
