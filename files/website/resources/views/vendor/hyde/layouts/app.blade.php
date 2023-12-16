<!DOCTYPE html>
<html data-theme="halloween"
      lang="{{ config('hyde.language', 'en') }}">

<head>
  @include('hyde::layouts.head')
</head>

<body class="grid min-h-screen grid-cols-1 justify-between"
      id="app"
      x-data="{ navigationOpen: false }"
      x-on:keydown.escape="navigationOpen = false;">
  @include('hyde::components.skip-to-content-button')
  @include('hyde::layouts.navigation')

  <section>
    @yield('content')
  </section>

  @include('hyde::layouts.footer')

  @include('hyde::layouts.scripts')
</body>

</html>
