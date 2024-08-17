<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data1 = new User();

        $firstname = $request->has('fName')? $request->get('fName'):'';
        $lastname = $request->has('lName')? $request->get('lName'):'';
        $username = $request->has('uName')? $request->get('uName'):'';
        $email = $request->has('eMail')? $request->get('eMail'):'';
        $pass = $request->has('pass1')? $request->get('pass1'):'';
        $passCon = $request->has('pass2')? $request->get('pass2'):'';
        
        $findEmail = User::where('email','LIKE','%'. $email . '%')->FIRST();
        $findUser = User::where('userName','LIKE','%'. $username . '%')->FIRST();
        
        if($findEmail)
        {
            return redirect()->back()->with('error', 'Email address already taken. Please try to another mail!');
        }
        else
        {
            if($findUser)
            {
                return redirect()->back()->with('error', 'Username already taken. Please try to another username!');
            }
            else
            {
                $data1->firstName = $firstname;
                $data1->lastName = $lastname;
                $data1->email = $email;
                $data1->userName = $username;
                $data1->userPassword = $passCon;
                $data1->save();
                return redirect()->back()->with('success', 'New user account create successfully!');
            }
            
        }        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request)
    {
        $username = $request->has('username')? $request->get('username'):'';
        $pass = $request->has('pass')? $request->get('pass'):'';
        
        $userinfo = User::where('userName', $username)->orWhere('email', $username)->where('userPassword', $pass)->first();

        if(isset($userinfo) && $pass != NULL)
        {
            return redirect('/');
        }
        else
        {
            return redirect()->back()->with('error','User name & password wrong. Please insert currect username and password. Thanks');
        }
    }
}
