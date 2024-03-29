<?php

namespace TontonGazon\Http\Controllers\Auth;

use TontonGazon\User;
use TontonGazon\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required','alpha', 'string', 'max:255'],
            'prenom' => ['required','alpha',  'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tel' => ['required', 'string', 'numeric', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'ville' => ['required', 'string', 'max:255'],
            'adresse1' => ['required', 'string', 'max:255'],
            'adresse2' => ['nullable','string', 'max:255'],
            'code_postal' => ['required', 'string', 'max:5'],
            'role' => ['required', 'string', 'max:255'],
        ]);
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \TontonGazon\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'password' => Hash::make($data['password']),
            'ville' => $data['ville'],
            'adresse1' => $data['adresse1'],
            'adresse2' => $data['adresse2'],
            'code_postal' => $data['code_postal'],
            'role' => $data['role'],
        ]);
    }
}
