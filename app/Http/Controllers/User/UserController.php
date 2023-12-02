<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\UserApplication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        // Retrieve applications associated with the user
        $applications = $user->userApplications()->latest()->get();

        return view('User.dashboard', compact('applications'));
    }
    public function create()
    {
        return view('User.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'spouse_name' => 'nullable|string|max:255',
            'present_village_name' => 'required|string|max:255',
            'present_zone' => 'required|string|max:255',
            'present_ward_no' => 'required|string|max:255',
            'present_post_office' => 'required|string|max:255',
            'present_post_code' => 'required|numeric',
            'present_upazila' => 'required|string|max:255',
            'present_district' => 'required|string|max:255',
            'present_country' => 'required|string|max:255',
            'permanent_village' => 'required|string|max:255',
            'permanent_zone' => 'required|string|max:255',
            'permanent_ward' => 'required|string|max:255',
            'permanent_post_office' => 'required|string|max:255',
            'permanent_post_code' => 'required|numeric',
            'permanent_upazila' => 'required|string|max:255',
            'permanent_district' => 'required|string|max:255',
            'permanent_country' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:255',
            'email_no' => 'required|email|max:255',
            'nationality' => 'required|string|max:255',
            'nid_no' => 'required|numeric',
            'bin' => 'nullable|string|max:255',
            'tin' => 'nullable|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_village_name' => 'required|string|max:255',
            'business_zone' => 'required|string|max:255',
            'business_word' => 'required|string|max:255',
            'business_post_office' => 'required|string|max:255',
            'business_post_code' => 'required|numeric',
            'business_upazila' => 'required|string|max:255',
            'business_district' => 'required|string|max:255',
            'business_country' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'business_capital' => 'required|numeric',
            'starting_days' => 'required|date',
            'ownership' => 'required|in:Own,Rent',
            'signboard' => 'required|numeric',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'birth_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $isDraft = $request->has('save_draft');

        $photoName = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
        $birthPhotoName = uniqid() . '.' . $request->file('birth_photo')->getClientOriginalExtension();

        $request->file('photo')->storeAs('public/images', $photoName);
        $request->file('birth_photo')->storeAs('public/images', $birthPhotoName);

        // Generate a unique 6-digit value for application_no
        $applicationNo = str_pad(random_int(1, 999999), 6, '0', STR_PAD_LEFT);
        while (UserApplication::where('application_no', $applicationNo)->exists()) {
            $applicationNo = str_pad(random_int(1, 999999), 6, '0', STR_PAD_LEFT);
        }
        // Date Formetting
        $startingDays = Carbon::createFromFormat('m/d/Y', $validatedData['starting_days'])->format('Y-m-d');

        // Get the currently authenticated user
        $user = Auth::user();

        $user = UserApplication::create([
            'application_no' => $applicationNo,
            'name' => $validatedData['name'],
            'user_id' => $user->id,
            'mother_name' => $validatedData['mother_name'],
            'father_name' => $validatedData['father_name'],
            'spouse_name' => $validatedData['spouse_name'],
            'present_village_name' => $validatedData['present_village_name'],
            'present_zone' => $validatedData['present_zone'],
            'present_ward_no' => $validatedData['present_ward_no'],
            'present_post_office' => $validatedData['present_post_office'],
            'present_post_code' => $validatedData['present_post_code'],
            'present_upazila' => $validatedData['present_upazila'],
            'present_district' => $validatedData['present_district'],
            'present_country' => $validatedData['present_country'],
            'permanent_village' => $validatedData['permanent_village'],
            'permanent_zone' => $validatedData['permanent_zone'],
            'permanent_ward' => $validatedData['permanent_ward'],
            'permanent_post_office' => $validatedData['permanent_post_office'],
            'permanent_post_code' => $validatedData['permanent_post_code'],
            'permanent_upazila' => $validatedData['permanent_upazila'],
            'permanent_district' => $validatedData['permanent_district'],
            'permanent_country' => $validatedData['permanent_country'],
            'mobile_no' => $validatedData['mobile_no'],
            'email_no' => $validatedData['email_no'],
            'nationality' => $validatedData['nationality'],
            'nid_no' => $validatedData['nid_no'],
            'bin' => $validatedData['bin'],
            'tin' => $validatedData['tin'],
            'business_name' => $validatedData['business_name'],
            'business_village_name' => $validatedData['business_village_name'],
            'business_zone' => $validatedData['business_zone'],
            'business_word' => $validatedData['business_word'],
            'business_post_office' => $validatedData['business_post_office'],
            'business_post_code' => $validatedData['business_post_code'],
            'business_upazila' => $validatedData['business_upazila'],
            'business_district' => $validatedData['business_district'],
            'business_country' => $validatedData['business_country'],
            'business_type' => $validatedData['business_type'],
            'business_capital' => $validatedData['business_capital'],
            'starting_days' => $startingDays,
            'ownership' => $validatedData['ownership'],
            'signboard' => $validatedData['signboard'],
            'photo' => $photoName,
            'birth_photo' => $birthPhotoName,
            'is_draft' => $isDraft,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Form Submitted Add SuccessFully');
    }
    public function edit($id)
    {
        $application = UserApplication::findOrFail($id);

        return view('User.edit', compact('application'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'spouse_name' => 'nullable|string|max:255',
            'present_village_name' => 'required|string|max:255',
            'present_zone' => 'required|string|max:255',
            'present_ward_no' => 'required|string|max:255',
            'present_post_office' => 'required|string|max:255',
            'present_post_code' => 'required|numeric',
            'present_upazila' => 'required|string|max:255',
            'present_district' => 'required|string|max:255',
            'present_country' => 'required|string|max:255',
            'permanent_village' => 'required|string|max:255',
            'permanent_zone' => 'required|string|max:255',
            'permanent_ward' => 'required|string|max:255',
            'permanent_post_office' => 'required|string|max:255',
            'permanent_post_code' => 'required|numeric',
            'permanent_upazila' => 'required|string|max:255',
            'permanent_district' => 'required|string|max:255',
            'permanent_country' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:255',
            'email_no' => 'required|email|max:255',
            'nationality' => 'required|string|max:255',
            'nid_no' => 'required|numeric',
            'bin' => 'nullable|string|max:255',
            'tin' => 'nullable|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_village_name' => 'required|string|max:255',
            'business_zone' => 'required|string|max:255',
            'business_word' => 'required|string|max:255',
            'business_post_office' => 'required|string|max:255',
            'business_post_code' => 'required|numeric',
            'business_upazila' => 'required|string|max:255',
            'business_district' => 'required|string|max:255',
            'business_country' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'business_capital' => 'required|numeric',
            'starting_days' => 'required|date',
            'ownership' => 'required|in:Own,Rent',
            'signboard' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'birth_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Find the existing application by ID
        $application = UserApplication::findOrFail($id);

        $isDraft = $request->has('save_draft');
    
        // Format starting_days using Carbon
        $startingDays = Carbon::createFromFormat('m/d/Y', $validatedData['starting_days'])->format('Y-m-d');
    
        // Handle photo and birth_photo updates
        $photoName = $application->photo;
        if ($request->hasFile('photo')) {
            Storage::delete('public/images/' . $application->photo);
            $photoName = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('public/images', $photoName);
        }
    
        $birthPhotoName = $application->birth_photo;
        if ($request->hasFile('birth_photo')) {
            Storage::delete('public/images/' . $application->birth_photo);
            $birthPhotoName = uniqid() . '.' . $request->file('birth_photo')->getClientOriginalExtension();
            $request->file('birth_photo')->storeAs('public/images', $birthPhotoName);
        }
    
        // Update the application
        $application->update([
            'name' => $validatedData['name'],
            'user_id' => Auth::user()->id,
            'mother_name' => $validatedData['mother_name'],
            'father_name' => $validatedData['father_name'],
            'spouse_name' => $validatedData['spouse_name'],
            'present_village_name' => $validatedData['present_village_name'],
            'present_zone' => $validatedData['present_zone'],
            'present_ward_no' => $validatedData['present_ward_no'],
            'present_post_office' => $validatedData['present_post_office'],
            'present_post_code' => $validatedData['present_post_code'],
            'present_upazila' => $validatedData['present_upazila'],
            'present_district' => $validatedData['present_district'],
            'present_country' => $validatedData['present_country'],
            'permanent_village' => $validatedData['permanent_village'],
            'permanent_zone' => $validatedData['permanent_zone'],
            'permanent_ward' => $validatedData['permanent_ward'],
            'permanent_post_office' => $validatedData['permanent_post_office'],
            'permanent_post_code' => $validatedData['permanent_post_code'],
            'permanent_upazila' => $validatedData['permanent_upazila'],
            'permanent_district' => $validatedData['permanent_district'],
            'permanent_country' => $validatedData['permanent_country'],
            'mobile_no' => $validatedData['mobile_no'],
            'email_no' => $validatedData['email_no'],
            'nationality' => $validatedData['nationality'],
            'nid_no' => $validatedData['nid_no'],
            'bin' => $validatedData['bin'],
            'tin' => $validatedData['tin'],
            'business_name' => $validatedData['business_name'],
            'business_village_name' => $validatedData['business_village_name'],
            'business_zone' => $validatedData['business_zone'],
            'business_word' => $validatedData['business_word'],
            'business_post_office' => $validatedData['business_post_office'],
            'business_post_code' => $validatedData['business_post_code'],
            'business_upazila' => $validatedData['business_upazila'],
            'business_district' => $validatedData['business_district'],
            'business_country' => $validatedData['business_country'],
            'business_type' => $validatedData['business_type'],
            'business_capital' => $validatedData['business_capital'],
            'starting_days' => $startingDays,
            'ownership' => $validatedData['ownership'],
            'signboard' => $validatedData['signboard'],
            'photo' => $photoName,
            'birth_photo' => $birthPhotoName,
            'is_draft' => $isDraft,
        ]);
    
        // Redirect with success message
        return redirect()->route('user.dashboard')->with('success', 'Form Updated Successfully');
    }
    

    public function destroy($id)
    {
        $application = UserApplication::findOrFail($id);

        // Delete the user's images from storage
        Storage::delete('public/images/' . $application->photo);
        Storage::delete('public/images/' . $application->birth_photo);

        // Delete the user record from the database
        $application->delete();

        // Redirect to the user dashboard or wherever you want
        return redirect()->route('user.dashboard')->with('success', 'Form Deleted Successfully');
    }
    public function showDrafts($id)
    {
        $draft = UserApplication::where('user_id', $id)
        ->where('is_draft', true)
        ->first();
        return view('User.draft', compact('draft'));
    }
    
    
}
