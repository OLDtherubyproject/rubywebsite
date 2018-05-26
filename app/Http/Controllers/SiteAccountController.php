<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;

class SiteAccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = auth()->user()->characters()->get();
        return view('site.account.index', compact('characters'));
    }

    /**
     * Generate a Recovery Key for the account, if it don't exist.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate_rk()
    {
        if (!empty(auth()->user()->recovery_key)) {
            return redirect()->back()->withErrors('You already have a Recovery Key!');
        }

        auth()->user()->generate_rk();
        return redirect()->back()->withSuccess('Recovery Key generated successfully!');
    }


    /**
     * Set a date to delete a character.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete_character($id)
    {
        $character = Character::find($id);

        $date = now();
        date_add($date, date_interval_create_from_date_string('10 days'));
        $timestamp = date_timestamp_get($date);

        $character->deletion = $timestamp;
        $character->save();
        
        return redirect()->back()->withSuccess('Your character ' . $character->name . ' will be deleted in ' . date_format($date, 'd/m/Y \\a\t h:s'));
    }

    /**
     * Remove a character from deletion
     *
     * @return \Illuminate\Http\Response
     */
    public function undelete_character($id)
    {
        $character = Character::find($id);
        $character->deletion = 0;
        $character->save();

        return redirect()->back()->withSuccess('Your character ' . $character->name . ' will no longer be deleted.');
    }

    /**
     * Create a new character.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_character(Request $request)
    {
        $this->validate($request, Character::rules());
    }
}
