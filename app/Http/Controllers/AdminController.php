<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{

    public function showAdmin()
    {
        return view('Admin');
    }
    public function showLoginAdmin()
    {
        return view('loginadmin');
    }
    public function showRegisterAdmin()
    {
        return view('registeradmin');
    }

    public function registerAdmin(Request $request)
    {

        //validation
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        // store data in database
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $password = Hash::make($request->password);
        // $passwordEnc = Hash::make($password);

        DB::insert('insert into admin(name,email,password) values(?,?,?)', [$name, $email, $password]);


        //mark user as logged in
        $userId = DB::getpdo()->lastInsertId();
        $result = DB::select('select * from admin where id = ?', [$userId]);
        $user = null;
        if ($result) {
            $user = $result[0];
        }

        if ($user == null) {
            return back()->with(['error' => 'Unexpected error happened during registration']);
        }
        session()->regenerate();
        session([
            'loggedInAsAdmin' => true,
            'userId' => $userId,
            'user' => $user
        ]);

        return redirect('/Admin');
    }

    public function loginAdmin(Request $request)
    {
        //validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        // search for user by email
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from admin where email = ?', [$email]);
        if (!$result) {
            return back()->with(['error' => 'This email is not found'])->withInput();}
    
            else
            {$user = $result[0];}

        //check password
        $user = $result[0];
        if (!Hash::check($password, $user->password)) {
            return back()->with(['error' => 'Incorrect Password'])->withInput();
        }

        session()->regenerate();
        session([

            'loggedInAsAdmin' => true,
            'userid' => $user->id,
            'user' => $user

        ]);
        return redirect('/Admin')->with(['success_message' => 'Welcome Back']);
    }
  
}
