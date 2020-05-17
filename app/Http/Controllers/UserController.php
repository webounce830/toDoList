<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
//        DB::insert('insert into users (name,email,password) values (?,?,?)', [
//            'webounce', 'webounce830@gmail.com', 'password'
//        ]);

//        $users = DB::select('select * from users');
//        return $users;

//        DB::update('update users set name = ? where id = 1', ['toDoList']);
//
//        $users = DB::select('select * from users');
//        return $users;

        $data = [
            'name' => 'Brad',
            'email' => 'brad6566@gmail.com',
            'password' => 'password'
        ];
//        User::create($data);
//        $user = new User();
//        $user->name = 'Ri Wang';
//        $user->email = 'riw7563@gmail.com';
//        $user->password = bcrypt('password');
//        $user->save();

//        User::where('id', 2)->update(['name' => 'Richard Johnson']);

        $user = User::all();
        return $user;

//        User::where('id', 1)->delete();

        return view('home');
    }

    public function uploadAvatar(Request $request) {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            if (auth()->user()->avatar) {
                Storage::delete('/public/images/'.auth()->user()->avatar);
            }
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);

//            $request->session()->flash('message', 'Image Uploaded.');
            return redirect()->back()->with('message', 'Image Uploaded.'); // success message
        }
        //        $request->image->store('images', 'public');
//        $request->session()->flash('error', 'Image not Uploaded.');
        return redirect()->back()->with('error', 'Image not Uploaded.'); // error message
    }
}
