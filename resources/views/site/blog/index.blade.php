@extends('site.default')

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">{{ trans('blog.latest_news') }}</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Home</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
          <div class="row bar">
            <div id="blog-listing-big" class="col-md-2">
            </div>
            <div id="blog-listing-big" class="col-md-8">
              <section class="post">
                <h2><a href="post.htmls">Welcome!</a></h2>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="author-category">{{ trans('blog.by') }} <a href="#">Leohige</a> {{ trans('blog.in') }} <a href="blog.html">GENERAL</a></p>
                  </div>
                  <div class="col-sm-6 text-right">
                    <p class="date-comments"><a href="blog-post.html"><i class="fa fa-calendar-o"></i> May 23, 2018</a><a href="blog-post.html"><i class="fa fa-comment-o"></i> 0 {{ trans('blog.comments') }}</a></p>
                  </div>
                </div>
                <div class="image"><a href="blog-post.html"><img src="http://i0.kym-cdn.com/photos/images/original/000/897/151/201.png" alt="Example blog post alt" class="img-fluid"></a></div>
                <p class="intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  Why do we use it?
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <p class="read-more text-right"><a href="blog-post.html" class="btn btn-template-outlined">{{ trans('blog.continue_reading') }}</a></p>
              </section>
              <ul class="pager list-unstyled d-flex align-items-center justify-content-between">
                <li class="previous"><a href="#" class="btn btn-template-outlined">← {{ trans('blog.older') }}</a></li>
                <li class="next disabled"><a href="#" class="btn btn-template-outlined">{{ trans('blog.newer') }} →</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection
