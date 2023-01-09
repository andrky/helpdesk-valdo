<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Divisi;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user', [
					'title' => "User",
					'users' => User::all()
				]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.usertambah', [
					'title' => "Tambah User",
					'users' => User::all(),
					'karyawans' => Karyawan::all()
				]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
					'karyawan_id' => 'required',
					'level' => 'required',
					'email' => 'required|email:dns|unique:users',
					'password' => 'required|min:8|max:155|confirmed',
					'password_confirmation' => 'required|min:8'
				]);

				$validateData['password'] = Hash::make($validateData['password']);

				User::create($validateData);

				return redirect('/user')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.useredit', [
					'title' => "Edit User",
					'users' => $user,
					'karyawans' => Karyawan::all()
				]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
					'karyawan_id' => 'required',
					'level' => 'required'
				];

				if($request->email != $user->email) {
					$rules['email'] = 'required|unique:users|max:255';
				}

				$validatedData = $request->validate($rules);

				User::where('id', $user->id)
						->update($validatedData);

				return redirect('/user')->with('success', 'Data berhasil diedit!');
			// 	$currentPassword = Auth()->user()->password;
			// 	$old_password = $request('old_password');
				
			// if (Hash::check($old_password, $currentPassword)) {
			// 		Auth()->user()->update([
			// 			'password' => Hash::make($request['password'])
			// 		]);
			// 		return redirect('/user')->with('success', 'Data berhasil diedit!');
			// } else {
			// 	return redirect('/user')->with('error', 'Password lama tidak sesuai!');
			// }
		}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

				return redirect('/user')->with('success', 'Data berhasil dihapus!');
    }
}
