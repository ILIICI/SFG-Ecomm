<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileEmailRequest;
use App\Http\Requests\UpdateProfilePasswordRequest;


class ProfileController extends Controller
{
//Global Feature : Upadate password
    public function updatePassword(UpdateProfilePasswordRequest $request)
    {
        auth()->user()->update($request->only('name', 'email'));
        if ($request->input('password')) {
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }
        return redirect()->route('profile')->with('message', 'Password profile saved successfully');
    }
//Global Feature : Upadate email
    public function updateEmail(UpdateProfileEmailRequest $request)
    {
        auth()->user()->update($request->only('name', 'email'));

        if ($request->input('email')) {
            auth()->user()->update([$request->input('email')]);
        }
        return redirect()->route('profile')->with('message', 'Email profile saved successfully');
    }
}
