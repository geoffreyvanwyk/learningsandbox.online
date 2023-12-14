@php
  $author = collect(config('hyde.authors'))->first();
@endphp
@if (config('hyde.footer') !== false)
  <footer class="mt-auto flex w-full justify-between bg-gray-800 px-6 py-4 text-center"
          aria-label="Page footer">
    <div>
      &copy; {{ now()->year }}
      @if ($author)
        <a class="underline"
           href="{{ $author->website }}">{{ $author->name }}</a>
      @endif
    </div>
    <div class="prose-invert mx-auto text-center">
      {!! \Hyde\Support\Includes::markdown(
          'footer',
          config('hyde.footer', 'Site proudly built with [HydePHP](https://github.com/hydephp/hyde) 🎩'),
      ) !!}
    </div>
    <a class="float-right"
       href="#app"
       aria-label="Go to top of page">
      <button title="Scroll to top">
        <svg class="h-6 w-6 fill-current text-gray-500"
             width="1.5rem"
             height="1.5rem"
             role="presentation"
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 20 20">
          <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
        </svg>
      </button>
    </a>
  </footer>
@endif
