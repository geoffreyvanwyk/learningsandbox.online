@php
  $author = collect(config('hyde.authors'))->first();
@endphp
@if (config('hyde.footer') !== false)
  <footer class="flex w-full flex-col items-center justify-between bg-gray-800 px-6 py-4 text-white md:flex-row"
          aria-label="Page footer">
    <p class="prose-invert">
      &copy; {{ now()->year }}
      @if ($author)
        <a href="{{ $author->website }}">{{ $author->name }}</a>
      @endif
    </p>

    <div class="prose-invert">
      {!! \Hyde\Support\Includes::markdown(
          'footer',
          config('hyde.footer', 'Site proudly built with [HydePHP](https://github.com/hydephp/hyde) 🎩'),
      ) !!}
    </div>

    <a
       href="https://www.digitalocean.com/?refcode=0fbd041b9aad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge">
      <img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%202.svg"
           alt="DigitalOcean Referral Badge" />
    </a>

    <a href="#app"
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
