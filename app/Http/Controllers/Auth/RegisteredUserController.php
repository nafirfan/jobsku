<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Company;
use App\Events\CompanyRegistered;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:30', 'unique:' . User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'role' => ['required', 'string', 'in:1,2'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->role == "1") {
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
            event(new Registered($user));

            //  Comment to Disable auto login after registration, but user must verify email
            Auth::login($user);

            return redirect(RouteServiceProvider::WELCOME);
        } else if ($request->role == "2") {
            $request->validate([
                'company_name' => ['required', 'string', 'max:255'],
                'company_type' => ['required', 'string', 'max:255'],
            ]);

            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);

            $company = Company::create([
                'name' => $request->company_name,
                'type' => $request->company_type,
                'user_id' => $user->id,
            ]);

            event(new Registered($user));
            event(new CompanyRegistered($company));

            //  Comment to Disable auto login after registration, but user must verify email
            Auth::login($user);

            return redirect(RouteServiceProvider::WELCOME);
        }
        return redirect('/register');
    }
}
