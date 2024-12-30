<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Role;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    function listHero() {
        $hero = Hero::orderBy('id', 'asc')->get();
        
        return view('hero.list-hero', compact('hero'));
    }

    function tambah() {
        $role = Role::orderBy('id')->get();
        return view('hero.tambah', compact('role'));
    }

    function submit (Request $request) {
        $hero = new Hero();
        $hero->name = $request->name;
        $hero->nickname = $request->nickname;
        $hero->role = $request->role;
        $hero->lane_recc = $request->lane;
        $hero->speciality = $request->speciality;
        $hero->damage = $request->damage;
        $hero->price = $request->price;
        $hero->save();

        return redirect()->route('hero.list-hero');
    }

    function edit($id) {
        $hero = Hero::find($id);
        return view('hero.edit', compact('hero'));
    }

    function update(Request $request, $id) {
        $hero = Hero::find($id);
        $hero->name = $request->name;
        $hero->nickname = $request->nickname;
        $hero->role = $request->role;
        $hero->lane_recc = $request->lane;
        $hero->speciality = $request->speciality;
        $hero->damage = $request->damage;
        $hero->price = $request->price;
        $hero->update();

        return redirect()->route('hero.list-hero');
    }

    function delete($id){
        $hero = Hero::find($id);
        $hero->delete();
        return redirect()->route('hero.list-hero');
    }
}
