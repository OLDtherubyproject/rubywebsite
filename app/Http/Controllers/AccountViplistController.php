<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Account;
use App\CharactersOnline;
use App\AccountViplist;

class AccountViplistController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $view = ($this->isAdminRequest()) ? 'admin.accounts.show' : 'site.accounts.viplist.show';

        $account = ($id) ? Account::find($id) : auth()->user();
        $friends = AccountViplist::select('account_viplists.account_id', 'account_viplists.character_id', 'characters.name', 'characters_online.character_id AS is_online')->where('account_viplists.account_id', $account->id)
                                                                                                                                                                           ->join('characters', 'characters.id', '=', 'account_viplists.character_id')
                                                                                                                                                                           ->leftjoin('characters_online', 'characters_online.character_id', '=', 'account_viplists.character_id')
                                                                                                                                                                           ->get();
        return view($view, compact('account', 'friends'));
    }
}

