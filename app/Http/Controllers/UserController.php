<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request) {
        if ($request->hasFile('image')){
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'image uploaded.');
        }
        return redirect()->back()->with('error', 'image not uploaded.');
    }

    public function index() {
//        $data = [
//            'name' => 'scha',
//            'email' => 'scha@gmail.com',
//            'password' => 'password',
//        ];

//        User::create($data);

//        $user = new User();
//        $user->name = 'izzaz';
//        $user->email = 'izzaz@gmail.com';
//        $user->password = bcrypt('password');
//        $user->save();

//        User::where('id', 4)->delete();

//        User::where('id', 3)->update(['name' => 'ezaz']);

        return User::all();

//        DB::insert('insert into users (name, email, password) values (?, ?, ?)', [
//            'ezaz', 'm.izzaz93@gmail.com', 'password'
//        ]);

//        DB::update("update users set name='izzaz' where id=1");

//        DB::delete('delete from users where id = 1');

//        return DB::select('select * from users');
        return view('pages.index');
    }
}
