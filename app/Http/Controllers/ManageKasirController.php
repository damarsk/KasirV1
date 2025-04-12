<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManageKasirController extends Controller
{
    public function index() {
        $title = 'Manage User';
        $subtitle = 'List User';
        $users = User::all();
        return view('admin.manage_kasir.index', compact('title', 'subtitle', 'users'));
    }

    public function create() {
        $title = 'Manage User';
        $subtitle = 'Create User';
        return view('admin.manage_kasir.create', compact('title', 'subtitle'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,petugas'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('manage.user')->with('success', 'User created successfully');
    }

    public function edit($id) {
        $title = 'Manage User';
        $subtitle = 'Edit User';
        $user = User::findOrFail($id);
        return view('admin.manage_kasir.edit', compact('title', 'subtitle', 'user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required|in:admin,petugas'
        ]);

        $user = User::findOrFail($id);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ];

        if($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('manage.user')->with('success', 'User updated successfully');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('manage.user')->with('success', 'User deleted successfully');
    }
}
