<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\UserModel;
use DB;

class registerController extends Controller
{
    public function create(Request $request) {

        // $this->validate(request(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        $user = new UserModel;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->gender = Input::get('gender');
        // dd($user->name);
        $user->save();

        // return view('table');
        return redirect('/table');
    }

    public function view() {
        $users = new UserModel;
        $data = DB::select('select * from user_details');
        return view('table')->with('data' , $data);
    }

    public function edit($id) {
        // dd($id);
        $user = UserModel::find($id);
        return view('edittable', compact('user'));
    }

    public function delete($id) {
        // dd($id);
        $user = UserModel::find($id);
        $user->delete();
        $data = DB::select('select * from user_details');
        return view('table')->with('data' , $data);
    }

}
