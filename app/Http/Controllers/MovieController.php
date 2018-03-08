<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 *
 */
class MovieController extends Controller
{

  function __construct()
  {
    # code...
  }
  function index()
  {
    return "Hello from MovieController";
  }
  function view()
  {
    return "Hello from MovieController view method";
  }
}
