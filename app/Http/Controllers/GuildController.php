<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guild;
use App\Character;
use RealRashid\SweetAlert\Facades\Alert;

class GuildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guilds = Guild::latest('name')->get();
        return view('admin.guilds.index', compact('guilds', 'characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $characters = Character::pluck('name', 'id');
        return view('admin.guilds.create', compact('characters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Guild::rules());
        
        Guild::create($request->all());

        alert()->success('Guild Created', 'Successfully');
        return redirect('admin/guilds')->withSuccess(trans('admin.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guild = Guild::findOrFail($id);

        return view('admin.guilds.show', compact('guild'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $characters = Character::pluck('name', 'id');
        $guild = Guild::findOrFail($id);

        return view('admin.guild.edit', compact('guild', 'characters'));
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
        $this->validate($request, Guild::rules(true, $id));

        $guild = Guild::findOrFail($id);

        $guild->update($request->all());

        return redirect()->route(ADMIN . '.guilds.index')->withSuccess(trans('admin.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Guild::destroy($id);
            return back()->withSuccess(trans('admin.success_destroy')); 
        }catch(\Illuminate\Database\QueryException $e){
            return back()->withErrors(array('message' => 'Login field is required.')); 
        }
    }
}
