<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\UserApplication;
use App\Http\Controllers\Controller;

class UserApiController extends Controller
{
    public function index(Request $request, $id = null)
    {
        return $id ? UserApplication::find($id) : UserApplication::all();
    }
}
