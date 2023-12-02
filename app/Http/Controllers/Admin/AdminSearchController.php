<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\UserApplication;
use App\Http\Controllers\Controller;

class AdminSearchController extends Controller
{
    public function searchApplications(Request $request)
    {
        $search = $request->input('search');

        $applications = UserApplication::where('name', 'like', '%' . $search . '%')
            ->orWhere('application_no', 'like', '%' . $search . '%')
            ->orWhere('nid_no', 'like', '%' . $search . '%')
            ->get();

        return view('Admin.search', compact('applications'));
    }
}
