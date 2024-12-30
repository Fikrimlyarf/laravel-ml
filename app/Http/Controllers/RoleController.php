<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function listRole() {
        $role = Role::orderBy('id')->get();
        return view('role.list-role', compact('role'));
    }

    function tambah() {
        return view('role.tambah');
    }

    function submit(Request $request) {
        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return redirect()->route('role.list-role');
    }

    function edit($id) {
        $role = Role::find($id);
        return view('role.edit', compact('role'));
    }

    function update(Request $request, $id) {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->update();

        return redirect()->route('role.list-role');
    }

    function delete($id) {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('role.list-role');
    }
}
