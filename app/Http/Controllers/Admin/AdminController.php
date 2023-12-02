<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserApplication;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $applications = UserApplication::where('status', 0)->latest()->get();
        return view('Admin.panding', compact('applications'));
    }
    public function adminHome()
    {
        $applications = UserApplication::where('status', 1)->latest()->get();
        return view('Admin.adminHome',compact('applications'));
    }
    public function approve(Request $request, $id)
    {
        // Logic to approve the item with $id
        $application = UserApplication::find($id);
        $application->status = 1; // Update status to 1
        $application->save();

        if ($request->ajax()) {
            return response()->json(['message' => 'Approved successfully']);
        }

        return redirect()->back()->with('success', 'Application approved successfully');
    }
    public function reject(Request $request, $id)
    {
        // Logic to reject the item with $id
        $application = UserApplication::find($id);

        // Delete the form (record) if it exists
        if ($application) {
            $application->delete();

            if ($request->ajax()) {
                return response()->json(['message' => 'Form rejected and deleted successfully']);
            }

            return redirect()->back()->with('success', 'Form rejected and deleted successfully');
        }

        if ($request->ajax()) {
            return response()->json(['message' => 'Form not found']);
        }

        return redirect()->back()->with('error', 'Form not found');
    }
}
