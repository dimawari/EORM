<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function showAllUsers()
    {
        $profiles = Profile::with('user')->get();

        return view('profile-users-list', ['profiles' => $profiles]);
    }
}