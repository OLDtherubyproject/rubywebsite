<div class="row mB-40">
  <div class="col-sm-8">
    <div class="bgc-white p-20 bd">
        {!! Form::mySelect('owner_id', 'Owner', $characters) !!}

        {!! Form::myInput('text', 'name', 'Name') !!}
    
        {!! Form::myInput('text', 'motd', 'Message of the Day') !!}
    </div>  
  </div>
</div>