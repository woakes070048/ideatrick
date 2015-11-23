<?php

namespace IdeaTrick\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Mail;
use Flash;
use Auth;

use IdeaTrick\User;
use IdeaTrick\Http\Requests;
use IdeaTrick\Http\Controllers\Controller;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->beforeFilter('guest', ['except' => ['destroy']]);
        $this->beforeFilter('auth', ['only' => ['destroy']]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister ()
    {
        $rules = [
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ];

        $validator = Validator::make(Input::only('username', 'email', 'password', 'password_confirmation'), $rules);
        
        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $activation_code = str_random(60);
        User::create([
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'activation_code' => $activation_code
        ]);

        Mail::send('emails.activateAccount', compact('activation_code'), function($message) {
            $message->to(Input::get('email'), Input::get('username'))->subject('Verify your email address');
        });

        // Flash::message('Thanks for signing up! Please check your email and follow the instructions to complete the sign up process');
        return Redirect::to('/');
    }

    public function activate($activation_code)
    {
        if( ! $activation_code)
        {
            return Redirect::route('');
        }

        $user = User::whereActivationCode($activation_code)->first();

        if ( ! $user)
        {
            return Redirect::route('home');
        }

        $user->is_active = true;
        $user->activation_code = null;
        $user->save();

        // Flash::message('You have successfully verified your account.');

        return Redirect::route('login_path');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin()
    {
        $rules = [
            'username' => 'required|exists:users',
            'password' => 'required'
        ];

        $validator = Validator::make(Input::only('username', 'email', 'password'), $rules);
        
        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'is_active' => true
        ];

        if ( ! Auth::attempt($credentials))
        {
            return Redirect::back()->withInput()->withErrors(['credentials' => 'Looks like something wrong']);
        }

        // Flash::message('Welcome back!');

        return Redirect::home();
    }

    /**
     * Log a user out
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        return Redirect::home();
    }

}
