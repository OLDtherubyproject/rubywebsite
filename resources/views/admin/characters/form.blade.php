<div class="row mB-40">
  <div class="col-sm-8">
    <div class="bgc-white p-20 bd">
        {!! Form::mySelect('account_id', 'Account', $users) !!}
        
        {!! Form::myInput('text', 'name', 'Name') !!}
    
        {!! Form::myInput('number', 'level', 'Level') !!}
    
        {!! Form::myInput('number', 'experience', 'Experience') !!}
    </div>  
  </div>
</div>