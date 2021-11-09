<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function getForm(){
        return view('form.forms');
    }
    public function postForm(Request $request){
        $rulus= [
            'uname'=>'required|string',
            'email'=>'email|required',
            'password'=>'required|min:4|max:24'
        ];

        $messages = [
            'uname.required'=>'please enter your user name',
            'email.required'=>'please enter your email correctly',
            'password.required'=>'please enter your password',
            'password.min'=>'your password is must be longer than 4 charactors',
            'password.max'=>'your password must not greater than 24 chadracors'
        ];

        $validator = Validator::make($request->all(), $rulus, $messages);
        if ($validator->fails()) {
            return redirect()->back()->with('errors',$validator->errors());
        }
     
        $user = new User();

        $user->name = $request->uname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect()->back()->with('success','user account created');
    }
}
