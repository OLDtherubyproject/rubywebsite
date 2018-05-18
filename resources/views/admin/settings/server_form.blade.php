<div class="row mB-40">
<div class="col-sm-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Connection</h6>

        {!! Form::myInput('text', 'servername', 'Server Name', [], setting('servername', 'Ruby Server')) !!}

        {!! Form::myInput('text', 'messageoftheday', 'Message of the Day', [], setting('messageoftheday', 'Welcome to the Ruby Server!')) !!}
    
        {!! Form::myInput('text', 'ip', 'IP', [], setting('ip', '127.0.0.1')) !!}

        {!! Form::myInput('number', 'loginprotocolport', 'Login Protocol Port', [], setting('loginprotocolport', '7171')) !!}

        {!! Form::myInput('number', 'loginprotocolport', 'Login Protocol Port', [], setting('loginprotocolport', '7171')) !!}

        {!! Form::myInput('number', 'gameprotocolport', 'Game Protocol Port', [], setting('gameprotocolport', '7172')) !!}

        {!! Form::myInput('number', 'statusprotocolport', 'Game Protocol Port', [], setting('statusprotocolport', '7171')) !!}

        {!! Form::myInput('number', 'maxplayers', 'Max Players', [], setting('maxplayers', '0')) !!}

        {!! Form::myInput('number', 'statustimeout', 'Status Timeout', [], setting('statustimeout', '5000')) !!}

        {!! Form::myInput('number', 'maxpacketspersecond', 'Max Packets Per Second', [], setting('maxpacketspersecond', '25')) !!}


        <div class="checkbox checkbox-circle checkbox-info peers ai-c mB-15"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Call John for Dinner</span></label></div>

        <button type="button" class="btn btn-danger" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Popover title" aria-describedby="popover563655">Click to toggle popover</button>

    </div>  
  </div>
  <div class="col-sm-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Combat</h6>
        <h6 class="c-grey-900">Rates</h6>
        <h6 class="c-grey-900">Pokémon</h6>
        <h6 class="c-grey-900">Houses</h6>
        <h6 class="c-grey-900">Market</h6>
        <h6 class="c-grey-900">Actions</h6>
        <h6 class="c-grey-900">Other</h6>
    </div>  
  </div>
</div>