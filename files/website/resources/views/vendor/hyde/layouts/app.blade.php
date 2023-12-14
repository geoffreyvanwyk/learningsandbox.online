<!DOCTYPE html>
<html data-theme="halloween"
      lang="{{ config('hyde.language', 'en') }}">

<head>
  @include('hyde::layouts.head')
</head>

<body class="flex min-h-screen flex-col overflow-x-hidden dark:bg-gray-900 dark:text-white"
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
