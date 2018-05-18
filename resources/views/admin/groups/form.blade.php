<div class="row mB-40">
  <div class="col-sm-8">
    <div class="bgc-white p-20 bd">
        {!! Form::myInput('text', 'name', 'Name') !!}
    
        {!! Form::myInput('number', 'flags', 'Flags') !!}
    
        {!! Form::myCheckbox('access', 'Access') !!}
    
        {!! Form::myInput('number', 'maxdepotitems', 'Max CP Items') !!}

        {!! Form::myInput('number', 'maxvipentries', 'Max Vip Entries') !!}
    </div>  
  </div>
</div>