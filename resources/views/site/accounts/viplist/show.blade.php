@extends('site.default')

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">FRIEND LIST</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('accounts.show') }}">Account</a></li>
                <li class="breadcrumb-item active">Friends</li>
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-b">
                                            <div class="table-responsive">
                                                <div class="table-bordered">
                                                    <table class="table-custom-1 table table-hover mz-4">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach ($friends as $friend)                                                            
                                                                <tr>
                                                                    <td>
                                                                        {{ $friend->name }}
                                                                    </td>
                                                                    @if ($friend->is_online)
                                                                        <td class="text-success">
                                                                            Online
                                                                        </td>      
                                                                    @else
                                                                        <td class="text-danger">
                                                                            Offline
                                                                        </td>
                                                                    @endif
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
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
