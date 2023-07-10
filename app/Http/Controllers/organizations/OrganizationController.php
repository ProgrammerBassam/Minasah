<?php

namespace App\Http\Controllers\organizations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class OrganizationController extends Controller
{
  
  public function index()
  {
    return view('content.organizations.index', ['title' => 'Organiztions']);
  }
}
