  @include('partials.head')

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  @include('partials.navbar')
  @include('partials.jumbotron')


@yield('content')

  @include('partials.footer')
  @include('partials.script')
  

