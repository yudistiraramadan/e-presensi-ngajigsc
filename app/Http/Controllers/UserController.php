<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Pemanggilan Data Descanding
        // $data= DB::table('users')
        // ->orderBy('id', 'desc')
        // ->get();
        // return view('user.user', compact('data'));

        $data = User::all();
        return view('user.user', compact('data'));
    }

    // View Tambah User
    public function adduser()
    {
        return view('user.tambah-user');
    }

    public function insertuser(Request $request)
    {  
    //    dd($request->all());
       $user =  User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'level' => $request->level,
        'phone' => $request->phone,
       ]);
       $user->save();
       return redirect('/user');
    }
    // Delete Data
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user');
    }
    // Menampilkan Data Edit
    public function showuser($id)
    {
        $data = User::find($id);
        return view('user.show-user', compact('data'));
    }
    public function edituser(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('user');
    }
}
