<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profile.index', [
            'title' => 'profile',
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string|max:1000',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        // Simpan gambar jika ada
        if ($request->file('image')) {
            // Cek apakah ada gambar lama dan hapus
            if (auth()->user()->image) {
                // Hapus gambar lama jika ada
                Storage::delete(auth()->user()->image);
            }

            // Simpan gambar baru
            $validatedData['image'] = $request->file('image')->store('profile-images');
        }

        // Menyimpan data user
        $validatedData['user_id'] = auth()->user()->id;

        // Update data pengguna di database
        auth()->user()->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect('/dashboard/profile')->with('success', 'Profile updated successfully!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Mencari pengguna berdasarkan ID dan memperbarui data
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->save();

        // Menampilkan pesan sukses
        return redirect('/dashboard/profile')->with('success', 'Profile updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function updatePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:5|confirmed',
        ]);

        // Verifikasi apakah password saat ini sesuai
        if (!Hash::check($request->currentPassword, Auth::user()->password)) {
            return back()->withErrors(['currentPassword' => 'The current password is incorrect.']);
        }

        // Update password baru
        $user = Auth::user();
        $user->password = Hash::make($request->newPassword);
        $user->save();

        // Redirect kembali dengan pesan sukses
        return redirect('/dashboard/profile')->with('success', 'Password successfully updated.');
    }
}
