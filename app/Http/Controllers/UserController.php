<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderby('updated_at', 'desc')->paginate(config('constants.options.paging'));
        return view('users.list')->with('users', $users);
    }

    public function showInfo($id)
    {
        $info = User::find($id);
        return view('users.info')->with('info', $info);
    }

    public function create()
    {
        return view('users.add');
    }

    public function update($id)
    {
        //START VALIDATE FOR EXISTENCE OF ID ****************
        //create the validation rules for existence checking
        $id_validate = ['id' => $id];
        $rules = ['id' => 'exists:users,id,id,!0'];

        $validator = Validator::make($id_validate, $rules);

        if ($validator->fails()) {
            return abort(404);
        }
        //END VALIDATE **************************************

        //SHOW FORM *****************************************
        $user = User::find($id);
        return view('users.update')->with('user', $user);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', "Deleted!");
    }

    public function store(Request $req)
    {
        //START VALIDATE **************************************
        // create custom validation messages ------------------
        $messages = array(
            'required' => 'The :attribute is really really really important.',
            'same' => 'The :others must match.'
        );
        // do the validation ----------------------------------
        if (!isset($req->id)) {
            // create the validation rules for create form ----
            $new_rules = array(
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'password_confirm' => 'same:password'
            );
            $validator = Validator::make(Input::all(), $new_rules, $messages);
        } else {
            // create the validation rules for update form -----
            $update_rules = array(
                'id' => 'required|exists:users,id',
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $req->id,
                'password' => 'confirmed',
                'password_confirm' => 'same:password'
            );
            $validator = Validator::make(Input::all(), $update_rules, $messages);
        }
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::except('password', 'password_confirm'));
        }
        //END VALIDATE *****************************************

        //DO STORE DATA ****************************************
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;

        if (isset($req->id)) { //the case of update
            $user->exists = true;
            $user->id = $req->id;
            $message = "User updated.....!";
            //if password is empty, will not update it
            if (!empty($req->password)) {
                $user->password = bcrypt($req->password);
                $message = "User updated and password changed.....!";
            }
        } else { //the case of create
            $user->password = bcrypt($req->password);
            $message = "User created.....!";
        }

        $user->save();
        return back()->with('success', $message);
    }
}
