<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        if ($request->hasFile('imagen')) {
            $nombrefoto = time() . '-' . $request->file('imagen')->getClientOriginalName();
            $ruta = "img/users/" . $nombrefoto;
            $request->user()->ruta_imagen = $ruta;
            $request->file('imagen')->storeAs('public/img/users', $nombrefoto);
        }
        // dd($request->user());

        $request->user()->save();

        return Redirect::route('dashboard')->with('status', 'profile-updated');
    }

    public function address(Request $request): RedirectResponse
    {

        $rules = [
            'direccion' => ['string', 'max:255'],
            'cp' => ['numeric', 'digits:5'],
            'ciudad' => ['string', 'max:100'],
            'provincia' => ['string', 'max:100'],
            'pais' => ['string', 'max:100'],
        ];
        $request->user()->fill($request->validate($rules));
        $request->user()->save();

        return Redirect::route('dashboard')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
