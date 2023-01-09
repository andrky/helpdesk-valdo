<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index() {
			return view('password.cp', [
				'title' => 'Ganti Password',
			]);
		}

		public function update(Request $request) {
			$request->validate([
				'old_password' => 'required',
				'password' => 'required|min:8|confirmed',
				'password_confirmation' => 'required|min:8'
			]);

				$currentPassword = Auth()->user()->password;
				$old_password = $request['old_password'];
				
				if (!Hash::check($old_password, $currentPassword)) {
					return redirect('/cp/{user:id}')->withErrors(['old_password' => 'Password lama tidak sesuai!']);
				} else {
					Auth()->user()->update([
						'password' => Hash::make($request['password'])
					]);
					return redirect('/user')->with('success', 'Data berhasil diedit!');
			}
		}
}
