<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

        $users= User::paginate(10);
        return view('admin.home.index', ['users'=> $users]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users()
    {
        return view('admin.user');
    }
}
