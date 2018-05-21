<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Character;
use App\Account;
use App\Group;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::latest('name')->get();
        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('name', 'id');
        $accounts = Account::pluck('name', 'id');
        return view('admin.characters.create', compact('accounts', 'groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Character::rules());
        
        Character::create($request->all());

        return redirect('admin/characters')->withSuccess(trans('admin.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::findOrFail($id);

        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groups = Group::pluck('name', 'id');
        $accounts = Account::pluck('name', 'id');
        $character = Character::findOrFail($id);

        return view('admin.characters.edit', compact('character', 'accounts', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Character::rules(true, $id));

        $character = Character::findOrFail($id);

        $character->update($request->all());

        return redirect()->route(ADMIN . '.characters.index')->withSuccess(trans('admin.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Character::destroy($id);

        return back()->withSuccess(trans('admin.success_destroy')); 
    }
}
