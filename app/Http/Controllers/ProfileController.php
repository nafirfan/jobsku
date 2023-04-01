<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's resume form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's resume information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $img_profile = $request->file('img_profile');
        if($img_profile && $request->user()->img_profile === null){
            // First time user is updating their img_profile
            $img_profile->storePublicly('jobsku/users/profiles', 'wasabi');
            $request->user()->img_profile = $img_profile->hashName();
        }else if($img_profile && $request->user()->img_profile !== null) {
            // User is updating their img_profile
            Storage::disk('wasabi')->delete('jobsku/users/profiles/'.$request->user()->img_profile);
            $img_profile->storePublicly('jobsku/users/profiles', 'wasabi');
            $request->user()->img_profile = $img_profile->hashName();
        }

        // Save the additional fields
        $request->user()->location = $request->location;
        $request->user()->phone = $request->phone;
        $request->user()->current_job = $request->current_job;
        $request->user()->designation = $request->designation;
        $request->user()->save();

        return redirect()->route('profile.edit')->with('status', 'Profile updated successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Display the user's profile form.
     */
    public function myProfile(Request $request): View
    {
        return view('profile.my-profile', [
            'user' => $request->user(),
        ]);
    }
}
