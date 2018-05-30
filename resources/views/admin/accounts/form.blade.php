<div class="row mB-40">
<div class="col-sm-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Main Data</h6>
      {!! Form::myInput('text', 'name', 'Name') !!}
    
      {!! Form::myInput('email', 'email', 'Email') !!}
    
      {!! Form::myInput('password', 'password', 'Password') !!}
    
      {!! Form::myInput('password', 'password_confirmation', 'Password again') !!}
    
      {!! Form::mySelect('type', 'Type', config('variables.type')) !!}
    </div>  
  </div>
  <div class="col-sm-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Account</h6>

      {!! Form::myInput('text', 'fullname', 'Fullname') !!}

      {!! Form::myInput('date', 'birthday', 'Birthday') !!}
    </div>  
  </div>
</div>