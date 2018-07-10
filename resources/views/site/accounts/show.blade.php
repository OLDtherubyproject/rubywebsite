@extends('site.default')

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">{{ trans('account.form.welcome') }} {{ auth()->user()->name }}!</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">{{ trans('account.form.home') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('account.name.singular') }}</li>
              </ul>
            </div>
          </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row bar">
                <div id="blog-listing-big" class="col-md-1">
                </div>
                <div class="col-md-10">
                    @include('site.partials.messages')
                    <section id="body" class="body">
                        <div class="container-fluid">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 conteudo">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row table-bordered pl-4 pt-4 pr-4 mb-4">
                                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
                                                <div class="row text-center">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small text-muted">Avatar</div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <img src="{{ asset('images/avatars/' . auth()->user()->avatar . '.png') }}" title="Change Avatar" name="avatar" class="center-block img-responsive" alt="Change Avatar">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-muted"><strong>{{ auth()->user()->name }}</strong></div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small text-muted">{{ auth()->user()->email }}</div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 4px;">
                                                        <div class="btn btn-success btn-sm btn-block" style="text-align: left">{{ trans('account.form.vip_account') }}<span class="pull-right">{{ auth()->user()->premdays }} {{ trans('account.form.days') }}</span></div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <a href="{{ route('logout') }}" alt="Log Out" title="Log Out" class="btn btn-danger btn-sm btn-block"><span class="fa fa-sign-out"></span> {{ trans('admin.logout') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-7 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 text-muted">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 10px;">
                                                                <button type="button" class="btn btn-link btn-xs" alt="Change Password" data-toggle="modal" data-target="#password_email">{{ trans('admin.change') }} Email / {{ trans('account.form.password') }}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div name="recovery_key" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-muted mb-4 text-center" style="padding: 10px;">
                                                        @if (empty(auth()->user()->recovery_key))
                                                            {!! Form::open([
                                                                'url'  => route('accounts.generate_rk'), 
                                                                'method' => 'POST',
                                                                ])
                                                            !!}
                                                                <p>{{ trans('account.form.recovery_key') }}: <br><button type="submit" class="btn btn-sm btn-info">{{ trans('account.form.generate') }}!</button><p>
                                                            {!! Form::close() !!}
                                                        @else
                                                            <p>{{ trans('account.form.recovery_key') }}: <br><b>{{ auth()->user()->recovery_key }}</b></p>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-muted text-center" style="padding: 10px;">
                                                        <a href="{{ route('accounts.viplist.show') }}"><button type="button" class="btn btn-success btn-xs" alt="{{ trans('account.form.friends') }}" rel="list_of_friends"><span class="fa fa-group"></span> {{ trans('account.form.friends') }}</button></a>
                                                        <a href="{{ route('characters.create') }}"><button type="button" class="btn btn-success btn-xs" alt="{{ trans('character.form.create') }}" rel="create_character"><span class="fa fa-plus"></span> {{ trans('character.form.create') }}</button></a>
                                                        <button type="button" class="btn btn-warning btn-xs" alt="{{ trans('account.form.donate') }}" rel=""><span class="fa fa-money"></span> {{ trans('account.form.donate') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>{{ trans('account.form.registered_in') }}</th>
                                                                <td>{{ auth()->user()->created_at->format('M d, Y h:s') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ trans('account.form.last_login_in') }}</th>
                                                                <td>{{ (auth()->user()->lastday) ? date('M d, Y h:s', auth()->user()->lastday) : trans('account.form.never') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ trans('account.form.points') }}</th>
                                                                <td>{{ auth()->user()->points }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ trans('account.form.points_spent') }}</th>
                                                                <td>{{ auth()->user()->points_spent }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="mz-4 mb-4 titulo">{{ trans('character.name.plural') }}</h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-b">
                                                <div class="table-responsive">
                                                    <div class="table-bordered">
                                                        <table class="table-custom-1 table table-hover mz-4">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">{{ trans('character.form.name') }}</th>
                                                                    <th class="text-center">{{ trans('character.form.gender') }}</th>
                                                                    <th class="text-center">{{ trans('character.form.level') }}</th>
                                                                    <th class="text-center">{{ trans('character.form.status') }}</th>
                                                                    <th class="text-center">{{ trans('admin.actions') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                @if ($characters->count() == 0)
                                                                    <tr>
                                                                        <td colspan="7">{{ trans('character.form.any_character_created') }}!</td>
                                                                    </tr>
                                                                @else
                                                                    @foreach ($characters as $character)
                                                                        <tr>
                                                                            <td>{{ $character->name }}</td>
                                                                            <td>
                                                                                @if ($character->sex == 0) 
                                                                                    <span class="badge badge-primary"><i class="fa fa-venus"></i> {{ trans('character.form.female') }}</span>
                                                                                @else
                                                                                    <span class="badge badge-info"><i class="fa fa-mars"></i> {{ trans('character.form.male') }}</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>{{ $character->level }}</td>
                                                                            @if ($charactersOnline->contains('character_id', $character->id))
                                                                                <td class="text-success">Online</td>
                                                                            @else
                                                                                <td class="text-danger">Offline</td>
                                                                            @endif
                                                                            <td>
                                                                                @if ($character->deletion != 0)
                                                                                    {!! Form::open([
                                                                                        'class'=>'delete',
                                                                                        'url'  => route('characters.undestroy', $character->id), 
                                                                                        'method' => 'PATCH',
                                                                                        ])
                                                                                    !!}
                                                                                        <button type="submit" class="btn btn-success">
                                                                                            <i class="fa fa-save"></i> {{ trans('character.form.undelete') }}
                                                                                        </button>
                                                                                    {!! Form::close() !!}
                                                                                @else
                                                                                    {!! Form::open([
                                                                                        'class'=>'delete',
                                                                                        'url'  => route('characters.destroy', $character->id), 
                                                                                        'method' => 'DELETE',
                                                                                        ])
                                                                                    !!}
                                                                                        <button type="submit" class="btn btn-template-main">
                                                                                            <i class="fa fa-trash"></i> {{ trans('character.form.delete') }}
                                                                                        </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="mz-4 mb-4 titulo">{{ trans('account.form.purchase_history') }}</h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                                <div class="table-responsive">
                                                    <div class="table-bordered">
                                                        <table class="table-custom-1 table table-hover mz-4">
                                                            <thead>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>{{ trans('account.form.from') }} <i class="fa fa-info-circle" title="Account|Accounts"></i></th>
                                                                    <th>{{ trans('account.form.to') }} <i class="fa fa-info-circle" title="Character (Player)"></i></th>
                                                                    <th>{{ trans('account.form.cost') }}</th>
                                                                    <th>{{ trans('account.form.date') }}</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="6">{{ trans('account.form.no_purchase') }}!</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6">*{{ trans('account.form.displaying_10_lastest_donations') }}.</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="mz-4 mb-4 titulo">{{ trans('account.form.history_of_donations') }}</h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-b">
                                                <div class="table-responsive">
                                                    <div class="table-bordered">
                                                        <table class="table-custom-1 table table-hover mz-4">
                                                            <thead>
                                                                <tr>
                                                                    <th>{{ trans('account.form.method') }}</th>
                                                                    <th>{{ trans('account.form.transaction_code') }}</th>
                                                                    <th>Status</th>
                                                                    <th>{{ trans('account.form.value') }}</th>
                                                                    <th>{{ trans('account.form.points') }}</th>
                                                                    <th>{{ trans('account.form.date') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="6">{{ trans('account.form.no_donation_held') }}!</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6">*{{ trans('account.form.displaying_10_lastest_donations') }}.</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            {{ trans('account.form.choose_an_avatar') }}
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="https://www.pokewonder.com.br/account/avatar" accept-charset="UTF-8" class="form" name="change_avatar">
                                                <input name="_token" type="hidden" value="wycIOouJ1GSBh4gA9Ui3taGZz0IW4ZGymMeCSsrx">

                                                <div class="form-group">
                                                    <label for="avatares">{{ trans('account.form.preview') }}</label>
                                                    <img src="https://www.pokewonder.com.br/assets/img/avatares/0.png" class="img-responsive" alt="{{ trans('account.form.preview') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="avatares">Avatar</label>
                                                    <div class="select2-container form-control">
                                                        <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen">{{ trans('account.form.unknow') }}</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
                                                        <label for="s2id_autogen1" class="select2-offscreen">{{ trans('account.form.preview') }}</label>
                                                        <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1">
                                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                                            <div class="select2-search">
                                                                <label for="s2id_autogen1_search" class="select2-offscreen">{{ trans('account.form.preview') }}</label>
                                                                <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" placeholder=""> </div>
                                                            <ul class="select2-results" role="listbox"> </ul>
                                                        </div>
                                                    </div>
                                                    <select single="single" class="form-control" name="avatares" tabindex="-1" title="{{ trans('account.form.preview') }}" style="display: none;">
                                                        <option value="0">Unknown</option>
                                                        <option value="1">Flareon</option>
                                                        <option value="2">Chimchar</option>
                                                        <option value="3">Charmander</option>
                                                        <option value="4">Jolteon</option>
                                                        <option value="5">Leafon</option>
                                                        <option value="6">Treecko</option>
                                                        <option value="7">Glaceon</option>
                                                        <option value="8">Piplup</option>
                                                        <option value="9">Totodile</option>
                                                        <option value="10">Vaporeon</option>
                                                        <option value="11">Espeon</option>
                                                        <option value="12">Skitty</option>
                                                        <option value="13">Meowth</option>
                                                        <option value="14">Eevee</option>
                                                        <option value="15">Umbreon</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <input class="btn btn-primary btn-block" type="submit" value="{{ trans('admin.change') }}">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="password_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <!-- Nav tabs -->
                                            <ul id="pills-tab" role="tablist" class="nav nav-pills nav-justified">
                                                <li class="nav-item"><a data-toggle="tab" href="#change_email" role="tab" aria-controls="emailT" class="nav-link active show" aria-selected="true">Email</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#change_password" role="tab" aria-controls="senhaT" class="nav-link">{{ trans('admin.password') }}</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content" style="border: 0 !important;">
                                                <div role="tabpanel" class="tab-pane fade" id="change_password">
                                                    <div class="panel panel-success">
                                                        <div>
                                                            <form method="POST" action="" accept-charset="UTF-8" class="form" name="senha">                                                                
                                                                <div class="form-group">
                                                                    <label for="password">{{ trans('admin.new_password') }}</label>
                                                                    <input placeholder="******" class="form-control" name="password" type="password" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="repeat_password">{{ trans('admin.repeat_password') }}</label>
                                                                    <input placeholder="******" class="form-control" name="repeat_password" type="password" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="current_password">{{ trans('admin.current_password') }}</label>
                                                                    <input placeholder="******" class="form-control" name="current_password" type="password" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="btn btn-primary btn-block" type="submit" value="{{ trans('admin.change') }}">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div role="tabpanel" class="tab-pane fade in active show" id="change_email">
                                                    <div class="panel panel-primary">
                                                        <div>
                                                            <form method="POST" action="" accept-charset="UTF-8" class="form">                                                                
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input placeholder="email@example.com" class="form-control" name="email" type="email">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="repeat_email">{{ trans('admin.repeat_email') }}</label>
                                                                    <input placeholder="email@example.com" class="form-control" name="repeat_email" type="email">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="current_password">{{ trans('admin.current_password') }}</label>
                                                                    <input placeholder="******" class="form-control" name="current_password" type="password" value="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input class="btn btn-primary btn-block" type="submit" value="{{ trans('admin.change') }}">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
