<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\WelcomeNotification;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/home';

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        return response()->json([
            'token' => $this->create($request->all())->api_token
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'api_token' => str_random(60),
        ]);

        $user->notify(new WelcomeNotification);

        return $user;
    }
}
