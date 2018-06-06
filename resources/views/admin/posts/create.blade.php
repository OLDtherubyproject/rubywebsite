@extends('admin.default')

@section('page-header')
  Post <small>{{ trans('admin.add_new_item') }}</small> 
  <button type="submit" class="btn btn-primary pull-right">Save</button>
@stop

@section('content')

<div id="mainContent">
    <div class="row masonry" style="position: relative; height: auto;">
        <div class="masonry-sizer col-md-12"></div>
        <div class="masonry-item col-md-12" style="position: absolute; left: 50%; top: 0px;">
            <div class="bgc-white p-20 bd">
                <div class="mT-5">
                    <form>
                      <div class="form-row">
                          <div class="form-group col-md-8">
                            <label for="inputEmail4">Title</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Put a title">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputPassword4">Category</label>
                            <select id="inputState" class="form-control"><option selected="selected">Choose...</option><option>...</option></select>
                          </div>
                          
                          <div class="form-group col-md-12">
                            <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>  
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


@section('customjs')
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: "{{ route(ADMIN . '.filemanager.index') }}?type=Images",
    filebrowserImageUploadUrl: "{{ route(ADMIN . '.filemanager.upload') }}?type=Images&_token=",
    filebrowserBrowseUrl: "{{ route(ADMIN . '.filemanager.index') }}?type=Files",
    filebrowserUploadUrl: "{{ route(ADMIN . '.filemanager.upload') }}?type=Files&_token=",
    height: 300,
  };
</script>

<script>
CKEDITOR.replace('my-editor', options);
</script>

@endsection
