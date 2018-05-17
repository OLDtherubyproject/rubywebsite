<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('admin.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="app is-collapsed">

    @include('site.partials.spinner')

    <div>
      <!-- #Left Sidebar ==================== -->
      @include('site.partials.sidebar')

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
        @include('site.partials.topbar')

        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">

              <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>
        
              @include('site.partials.messages')
              @yield('content')

            </div>
          </div>
        </main>

        <!-- ### $App Screen Footer ### -->
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
          <span>Copyright © 2018 The Ruby Project. All rights reserved.</span>
        </footer>
      </div>
    </div>
  
    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
