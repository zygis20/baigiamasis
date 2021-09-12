<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Information extends Controller
{
    public function index()
    {
        return view('information');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(Request $request)
    {
        //validation
        $this -> validate(
            $request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'personal_code' => 'required',
                'hooks' => 'required',
                'fishing_rods' => 'required',
                'lake' => 'required',

            ]
        );

        User::create([
            'first_name' => $request['first_name'],
            'last_name' =>$request['last_name'],
            'personal_code' =>$request['personal_code'],
            'email' =>$request['email'],
            'hooks' => $request['hooks'],
            'fishing_rods' => $request['fishing_rods'],
            'lake' => $request['lake'],
        ]);
        //create fisherman
        //redirect to ticket preview and pay
        dd('a');
    }
}
