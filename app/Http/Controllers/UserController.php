<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Validator;
use Auth;
use Hash;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=> [
                'required',
                'confirmed',        

            ],
        ]);
        $input=$request->all();
        $input['password']=Hash::make($request->input('password'));
    
        User::create($input);
       return redirect('/register?error=none');
    }
    public function validateuser(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum'
           ]);
      
           $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );
      
           if(Auth::attempt($user_data))
           {
            $layout = Auth::check()?"profile":"loginIcon";
            return view('profile-page');
           }
           else
           {
            return redirect('/?error=wronglogin');
           }
      
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
