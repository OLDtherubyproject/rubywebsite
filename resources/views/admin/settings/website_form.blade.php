<div class="row mB-40">
  <div class="col-sm-8">
    <div class="bgc-white p-20 bd">
        {!! Form::myInput('text', 'websitename', trans('website.form.name'), [], setting('websitename', 'RubyWebsite')) !!}
    
        {!! Form::myFile('logo', 'Logo') !!}
    </div>  
  </div>
</div>