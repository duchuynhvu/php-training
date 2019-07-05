<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
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

        if (isset($req->id)) { //store in updated case
            $user->exists = true;
            $user->id = $req->id;

            if (!empty($user->password)) {
                $user->password = bcrypt($req->password);
            }
            $message = "Updated.....!";
        } else { //store in created case
            $user->password = bcrypt($req->password);
            $message = "Created.....!";
        }
        $user->save();

        return back()->with('success', $message);
    }
}
