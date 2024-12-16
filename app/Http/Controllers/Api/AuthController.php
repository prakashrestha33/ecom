<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{


    public function register(Request $request): Response
    {
        try {
            $register = new RegisteredUserController();
           return  $register->store($request);
        } catch (\Exception $e){
            dd($e);
        }
    }

    public function login(LoginRequest $request): Response
    {
        try {
            $register = new AuthenticatedSessionController();
           return  $register->store($request);
        } catch (\Exception $e){
            dd($e);
        }
    }

}
