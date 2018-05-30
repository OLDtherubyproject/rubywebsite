<div class="row mB-40">
  <div class="col-sm-8">
    <div class="bgc-white p-20 bd">
        {!! Form::mySelect('account_id', 'Account', $accounts) !!}

        {!! Form::mySelect('group_id', 'Group', $groups) !!}

        {!! Form::mySelect('town_id', 'Town', $towns) !!}

        {!! Form::mySelect('sex', 'Sex', [0 => "Female", 1 => "Male"]) !!}
        
        {!! Form::myInput('text', 'name', 'Name') !!}
    
        {!! Form::myInput('number', 'level', 'Level') !!}
    
        {!! Form::myInput('number', 'experience', 'Experience') !!}
    </div>  
  </div>
</div>