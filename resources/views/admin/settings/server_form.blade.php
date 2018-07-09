<div class="row mB-40">
<div class="col-sm-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">{{ trans('server.form.connection') }}</h6>

        {!! Form::myInput('text', 'servername', trans('server.form.name'), [], setting('servername', 'Ruby Server')) !!}

        {!! Form::myInput('text', 'messageoftheday', trans('server.form.message_of_the_day'), [], setting('messageoftheday', 'Welcome to the Ruby Server!')) !!}
    
        {!! Form::myInput('text', 'ip', 'IP', [], setting('ip', '127.0.0.1')) !!}

        {!! Form::myInput('number', 'loginprotocolport', 'Login Protocol Port', [], setting('loginprotocolport', '7171')) !!}

        {!! Form::myInput('number', 'loginprotocolport', 'Login Protocol Port', [], setting('loginprotocolport', '7171')) !!}

        {!! Form::myInput('number', 'gameprotocolport', 'Game Protocol Port', [], setting('gameprotocolport', '7172')) !!}

        {!! Form::myInput('number', 'statusprotocolport', 'Game Protocol Port', [], setting('statusprotocolport', '7171')) !!}

        {!! Form::myInput('number', 'maxplayers', trans('server.form.max_players'), [], setting('maxplayers', '0')) !!}

        {!! Form::myInput('number', 'statustimeout', 'Status Timeout', [], setting('statustimeout', '5000')) !!}

        {!! Form::myInput('number', 'maxpacketspersecond', trans('server.form.max_packets_per_second'), [], setting('maxpacketspersecond', '25')) !!}
    </div>  
  </div>
  <div class="col-sm-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">{{ trans('server.form.combat') }}</h6>
        <h6 class="c-grey-900">Rates</h6>
        <h6 class="c-grey-900">Pokémon</h6>
        <h6 class="c-grey-900">{{ trans('server.form.houses') }}</h6>
        <h6 class="c-grey-900">{{ trans('server.form.market') }}</h6>
        <h6 class="c-grey-900">{{ trans('admin.actions') }}</h6>
        <h6 class="c-grey-900">{{ trans('server.form.other') }}</h6>
    </div>  
  </div>
</div>