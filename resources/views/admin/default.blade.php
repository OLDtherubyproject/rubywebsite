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
  <link href="{{ mix('/css/admin.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" />
</head>
<body class="app is-collapsed">

    @include('admin.partials.spinner')

    <div>
      <!-- #Left Sidebar ==================== -->
      @include('admin.partials.sidebar')

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
        @include('admin.partials.topbar')

        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">

              <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>
        
              @include('admin.partials.messages')
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
  
    <script src="{{ mix('/js/admin.js') }}"></script>
    @include('sweetalert::alert')

</body>
</html>
