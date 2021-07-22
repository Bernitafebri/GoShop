<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $user = user::all();
        $user = $user->groupBy('level');
        return view('user.index',compact('user'));
    }

    public function create()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users|confirmed',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required',
            'contact' => 'required',
            'level' => 'required'
        ]);

        $user = user::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'address'   => $request->address,
            'contact'   => $request->contact,
            'level'     => $request->level
        ]);
        if($user){
            //Berhasil
            return redirect()->route('user.index')->with(['success' => 'User Berhasil Ditambahkan!']);
        }else{
            //Gagal
            return redirect()->route('user.index')->with(['error' => 'User Gagal Ditambahkan!']);
        }
        

        // MAJID36 
        // KALO UDAH ADA ROLE / PE LEVELAN NTAR KU LANJUTIN DAN MAKE YG INI --MAJID36
        /*
        if ($request->level == '1') {
            $count1 = 1::where('email', $request->email)->count();
            $id1 = 1::where('email', $request->email)->get();
            foreach ($id1 as $val) {
                $1 = 1::findforfail($val->id);
            }
            if
        }
        */
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, user $user)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users|confirmed',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required',
            'contact' => 'required',
            'level' => 'required'
        ]);

        $user->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'address'   => $request->address,
            'contact'   => $request->contact,
            'level'     => $request->level
        ]);

        if($user){
            //Berhasil
            return redirect()->route('user.index')->with(['success' => 'Data User Berhasil Diperbarui!']);
        }else{
            return redirect()->route('user.index')->with(['error' => 'Data User Gagal Diperbarui!']);
        }
    }

    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
