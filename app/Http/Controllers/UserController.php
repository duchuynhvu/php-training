<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        $user = User::find($id);
        if (!$user) {
            return back()->with('error', 'Could not find id ' . $id . '. Please try again!');
        }
        return view('users.update')->with('user', $user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return back()->with('error', 'Could not find id ' . $id . '. Please try again!');
        }
        User::destroy($id);
        return back()->with('success', "Deleted!");
    }

    public function store(Request $req)
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;

        if (isset($req->id)) { //store if in updated case
            $user->exists = true;
            $user->id = $req->id;
            //if password is empty, will not update it
            if (!empty($user->password)) {
                $user->password = bcrypt($req->password);
            }
            $message = "User updated.....!";
        } else { //store if in created case
            $user->password = bcrypt($req->password);
            $message = "User created.....!";
        }
        $user->save();

        return back()->with('success', $message);
    }
}
