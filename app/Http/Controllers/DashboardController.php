<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $message = null;
    public $data = null;

    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.dashboard', $this->data);
    }
}
