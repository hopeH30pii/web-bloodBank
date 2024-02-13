<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{ //get-function

    public function HIS()
    {
        return view('HIS');
    }

    public function Home()
    {
        return view('Home');
    }
    public function showaddPatient()
    {
        return view('addpatient');
    }
    public function headPage()
    {
        return view('login-to');
    }



    public function showRegister()
    {
        return view('register');
    }
    public function showLogin()
    {
        return view('login');
    }

    public function showAppointment()
    {
        return view('appointment');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showContact()
    {
        return view('contact');
    }
    public function showServices()
    {
        return view('Services');
    }
    public function showSubmition()
    {
        return view('submition');
    }


    //register function
    public function register(Request $request)
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

        DB::insert('insert into users(name,email,password) values(?,?,?)', [$name, $email, $password]);


        //mark user as logged in
        $userId = DB::getpdo()->lastInsertId();
        $result = DB::select('select * from users where id = ?', [$userId]);
        $user = null;
        if ($result) {
            $user = $result[0];
        }

        if ($user == null) {
            return back()->with(['error' => 'Unexpected error happened during registration']);
        }
        session()->regenerate();
        session([
            'loggedIn' => true,
            'userId' => $userId,
            'user' => $user
        ]);

        return redirect('/appointment');
    }





    //post-function

    public function appointment(Request $request)
    {
        $request->validate(
            [

                'name' => 'required|max:100',
                'bloodt' => 'required|max:100',
                'phone' => 'required|max:100',
                'email' => 'required|email',
                'address' => 'required|max:100',
                'symptoms' => 'max:1000'
            ]
        );
        //store data in database
        $name = $request->name;
        $bloodt = $request->bloodt;
        $phone = $request->phone;
        $email = $request->email;
        $address = $request->address;
        $symptoms = $request->symptoms;

        DB::insert('insert into myappointment(name,bloodt,phone,email,address,symptoms) values(?,?,?,?,?,?)', [$name, $bloodt, $phone, $email, $address, $symptoms]);
        //mark as approved

        $userId = DB::getPdo()->lastInsertId();

        $result = DB::select('select * from addpatient where id=?', [$userId]);
        $user = null;
        if ($result) {
            $user = $result[0];
        }
        if ($user == null) {
            return back()->with(['error' => 'UnExpected error happened please try again'])->withInput();
        }
        session()->regenerate();
        session([

            'loggedIn' => true,
            'userid' => $userId,
            'user' => $user

        ]);

        return redirect('/submition')->with(['success_message' => 'Your appointment has been successfully registered, please wait our message for more details']);
    }


    ////contact function

    public function contact(Request $request)
    {
        $request->validate(
            [

                'name' => 'required|max:100',
                'phone' => 'required|max:100',
                'email' => 'required|email',
                'address' => 'required|max:100',
                'message' => 'max:1000'
            ]
        );
        //store data in database
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $address = $request->address;
        $message = $request->message;

        DB::insert('insert into mycontact(name,phone,email,address,message) values(?,?,?,?,?)', [$name, $phone, $email, $address, $message]);
        //mark as approved

        $userId = DB::getPdo()->lastInsertId();

        $result = DB::select('select * from mycontact where id=?', [$userId]);
        $user = null;
        if ($result) {
            $user = $result[0];
        }
        if ($user == null) {
            return back()->with(['error' => 'UnExpected error happened please try again'])->withInput();
        }
        session()->regenerate();
        session([

            'loggedIn' => true,
            'userid' => $userId,
            'user' => $user

        ]);

        return redirect('/submition')->with(['success_message' => 'Your message has been successfully registered, please wait our message for more details']);
    }


    public function addPatient(Request $request)
    {
        $request->validate(
            [

                'fname' => 'required|max:100',
                'lname' => 'required|max:100',
                'gender' => 'required|max:100',
                'email' => 'required|email|unique:addpatient',
                'address' => 'required|max:100',
                'age' => 'required|max:1000',
                'history' => 'max:1000'
            ]
        );
        //store data in database
        $fname = $request->fname;
        $lname = $request->lname;
        $gender = $request->gender;
        $email = $request->email;
        $address = $request->address;
        $age = $request->age;
        $history = $request->history;

        DB::insert('insert into addpatient(fname,lname,gender,email,address,age,history) values(?,?,?,?,?,?,?)', [$fname, $lname, $gender, $email, $address, $age, $history]);
        //mark as approved

        $userId = DB::getPdo()->lastInsertId();

        $result = DB::select('select * from addpatient where id=?', [$userId]);
        $user = null;
        if ($result) {
            $user = $result[0];
        }
        if ($user == null) {
            return back()->with(['error' => 'UnExpected error happened please try again'])->withInput();
        }
        session()->regenerate();
        session([

            'loggedIn' => true,
            'userid' => $userId,
            'user' => $user

        ]);

        return redirect('/submition')->with(['success_message' => 'Patient is added successfully']);
    }










    //////////////loginnnn

    public function login(Request $request)
    {
        //validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // search for user by email
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from users where email = ?', [$email]);
        if (!$result) {
            return back()->with(['error' => 'This email is not found'])->withInput();
        } else if ($email == 'admin@gmail.com' && $password == '12345') {
            return redirect('/Admin')->with(['success_message' => 'Welcome Back']);
        } else {
            $user = $result[0];
        }

        //check password
        $user = $result[0];
        if (!Hash::check($password, $user->password)) {
            return back()->with(['error' => 'Incorrect Password'])->withInput();
        }

        session()->regenerate();
        session([

            'loggedIn' => true,
            'userid' => $user->id,
            'user' => $user

        ]);
        return redirect('/appointment');
    }


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
            'email' => 'required|email|unique:admin',
            'password' => 'required|min:5'
        ]);

        // search for user by email
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from admin where email = ?', [$email]);
        if (!$result) {
            return back()->with(['error' => 'This email is not found'])->withInput();
        } else {
            $user = $result[0];
        }

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


    public function logout()
    {
        session()->invalidate();
        return redirect('/Home');
    }


    public function Adminlogout()
    {
        session()->invalidate();
        return redirect('/Home');
    }
}
