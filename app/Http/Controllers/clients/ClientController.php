<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ClientController extends Controller
{
  
  public function index()
  {
    return view('content.clients.index', ['title' => 'Clients']);
  }
}
