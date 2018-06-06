@extends('site.default')

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">WELCOME TO YOUR ACCOUNT {{ auth()->user()->name }}!</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Home</a></li>
                <li class="breadcrumb-item active">Account</li>
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
                                                        <div class="btn btn-success btn-sm btn-block" style="text-align: left">VIP Account<span class="pull-right">{{ auth()->user()->premdays }} Days</span></div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <a href="{{ route('logout') }}" alt="Log Out" title="Log Out" class="btn btn-danger btn-sm btn-block"><span class="fa fa-sign-out"></span> Log Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-7 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 text-muted">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 10px;">
                                                                <button type="button" class="btn btn-link btn-xs" alt="Change Password" data-toggle="modal" data-target="#password_email">Change Email / Password</button>
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
                                                                <p>Recovery Key: <br><button type="submit" class="btn btn-sm btn-info">Generate!</button><p>
                                                            {!! Form::close() !!}
                                                        @else
                                                            <p>Recovery Key: <br><b>{{ auth()->user()->recovery_key }}</b></p>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-muted text-center" style="padding: 10px;">
                                                        <a href="{{ route('accounts.viplist.show') }}"><button type="button" class="btn btn-success btn-xs" alt="List of Friends" rel="list_of_friends"><span class="fa fa-group"></span> Friends</button></a>
                                                        <a href="{{ route('characters.create') }}"><button type="button" class="btn btn-success btn-xs" alt="Create Character" rel="create_character"><span class="fa fa-plus"></span> Create Character</button></a>
                                                        <button type="button" class="btn btn-warning btn-xs" alt="Donate" rel=""><span class="fa fa-money"></span> Donate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Registered in</th>
                                                                <td>{{ auth()->user()->created_at->format('M d, Y \\a\t h:s') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Last login in</th>
                                                                <td>{{ (auth()->user()->lastday) ? date('M d, Y \\a\t h:s', auth()->user()->lastday) : 'Never' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Points</th>
                                                                <td>{{ auth()->user()->points }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Points Spent</th>
                                                                <td>{{ auth()->user()->points_spent }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="mz-4 mb-4 titulo">Characters</h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-b">
                                                <div class="table-responsive">
                                                    <div class="table-bordered">
                                                        <table class="table-custom-1 table table-hover mz-4">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Name</th>
                                                                    <th class="text-center">Gender</th>
                                                                    <th class="text-center">Level</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                @if ($characters->count() == 0)
                                                                    <tr>
                                                                        <td colspan="7">Any character created!</td>
                                                                    </tr>
                                                                @else
                                                                    @foreach ($characters as $character)
                                                                        <tr>
                                                                            <td>{{ $character->name }}</td>
                                                                            <td>
                                                                                @if ($character->sex == 0) 
                                                                                    <span class="badge badge-primary"><i class="fa fa-venus"></i> Female</span>
                                                                                @else
                                                                                    <span class="badge badge-info"><i class="fa fa-mars"></i> Male</span>
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
                                                                                            <i class="fa fa-save"></i> Undelete
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
                                                                                            <i class="fa fa-trash"></i> Delete
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
                                                <h3 class="mz-4 mb-4 titulo">Purchase History</h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                                <div class="table-responsive">
                                                    <div class="table-bordered">
                                                        <table class="table-custom-1 table table-hover mz-4">
                                                            <thead>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>From <i class="fa fa-info-circle" title="Account|Accounts"></i></th>
                                                                    <th>To <i class="fa fa-info-circle" title="Character (Player)"></i></th>
                                                                    <th>Cost</th>
                                                                    <th>Date</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="6">No purchase!</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6">*Displaying the latest 10 donations.</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="mz-4 mb-4 titulo">History of Donations</h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-b">
                                                <div class="table-responsive">
                                                    <div class="table-bordered">
                                                        <table class="table-custom-1 table table-hover mz-4">
                                                            <thead>
                                                                <tr>
                                                                    <th>Method</th>
                                                                    <th>Transaction Code</th>
                                                                    <th>Status</th>
                                                                    <th>Value</th>
                                                                    <th>Points</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="6">No donation held!</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6">*Displaying the latest 10 donations.</th>
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
                                            Choose an Avatar
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="https://www.pokewonder.com.br/account/avatar" accept-charset="UTF-8" class="form" name="change_avatar">
                                                <input name="_token" type="hidden" value="wycIOouJ1GSBh4gA9Ui3taGZz0IW4ZGymMeCSsrx">

                                                <div class="form-group">
                                                    <label for="avatares">Preview</label>
                                                    <img src="https://www.pokewonder.com.br/assets/img/avatares/0.png" class="img-responsive" alt="Preview">
                                                </div>
                                                <div class="form-group">
                                                    <label for="avatares">Avatars</label>
                                                    <div class="select2-container form-control">
                                                        <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen">Unknown</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
                                                        <label for="s2id_autogen1" class="select2-offscreen">PreviewAvatars</label>
                                                        <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1">
                                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                                            <div class="select2-search">
                                                                <label for="s2id_autogen1_search" class="select2-offscreen">PreviewAvatars</label>
                                                                <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" placeholder=""> </div>
                                                            <ul class="select2-results" role="listbox"> </ul>
                                                        </div>
                                                    </div>
                                                    <select single="single" class="form-control" name="avatares" tabindex="-1" title="PreviewAvatars" style="display: none;">
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
                                                    <input class="btn btn-primary btn-block" type="submit" value="Change">
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
                                                <li class="nav-item"><a data-toggle="tab" href="#change_password" role="tab" aria-controls="senhaT" class="nav-link">Senha</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content" style="border: 0 !important;">
                                                <div role="tabpanel" class="tab-pane fade" id="change_password">
                                                    <div class="panel panel-success">
                                                        <div>
                                                            <form method="POST" action="" accept-charset="UTF-8" class="form" name="senha">                                                                
                                                                <div class="form-group">
                                                                    <label for="password">New Password</label>
                                                                    <input placeholder="******" class="form-control" name="password" type="password" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="repeat_password">Repeat Password</label>
                                                                    <input placeholder="******" class="form-control" name="repeat_password" type="password" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="current_password">Current Password</label>
                                                                    <input placeholder="******" class="form-control" name="current_password" type="password" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="btn btn-primary btn-block" type="submit" value="Change">
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
                                                                    <label for="repeat_email">Repeat Email</label>
                                                                    <input placeholder="email@example.com" class="form-control" name="repeat_email" type="email">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="current_password">Current Password</label>
                                                                    <input placeholder="******" class="form-control" name="current_password" type="password" value="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input class="btn btn-primary btn-block" type="submit" value="Change">
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

                            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Character</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">                                            
                                            <!-- Tab panes -->
                                            <div class="tab-content" style="border: 0 !important;">
                                                <form method="POST" action="" accept-charset="UTF-8" class="form" name="senha">
                                                    <div class="form-group">
                                                        <label for="current_password">Name</label>
                                                        <input placeholder="Ash Ketchum" class="form-control" name="current_password" type="password" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Gender</label>
                                                        <select class="form-control" name="">
                                                            <option value="0">Female</option>
                                                            <option value="1">Male</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="repeat_password">Town</label>
                                                        <select class="form-control" name="">
                                                            <option value="0">Saffron</option>
                                                            <option value="1">Male</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="btn btn-primary btn-block" type="submit" value="Change">
                                                    </div>
                                                </form>
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
