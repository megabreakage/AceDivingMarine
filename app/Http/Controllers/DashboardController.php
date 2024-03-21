<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public $message = null;
    public $data = null;

    public function __construct()
    {
    }

    public function index()
    {
        $user = Auth::check() ? Auth::user() : null;
        $this->data = [
            'title' => 'Dashboard',
            'user' => $user,
        ];
        return view('admin.pages.dashboard', $this->data);
    }
}
