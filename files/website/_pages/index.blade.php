@extends('hyde::layouts.app')
@section('content')
  <main id="content">
    <!-- Primary Hero -->
    <div class="hero bg-base-200"
         style="background-image: url('/media/hero_background.jpg')">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-neutral-content">
        <section>
          <h1
              class="flex flex-col items-center justify-center space-x-3 text-3xl font-bold md:flex-row md:justify-start md:text-5xl">
            <img class="h-12 md:h-16"
                 src="/media/moodle_logo.svg">
            <span class="text-center">at your fingertips</span>
          </h1>
          <p class="py-6 text-lg md:text-xl">
            An installation of each supported version of the open source
            learning management system Moodle, the
            <span class="font-bold">M</span>odular
            <span class="font-bold">O</span>bject-<span class="font-bold">O</span>riented
            <span class="font-bold">D</span>ynamic
            <span class="font-bold">L</span>earning
            <span class="font-bold">E</span>nvironment.
            See how it looks, learn how it works, compare features between
            versions, find out what is new.
          </p>
          @if (config('hyde.moodle.versions')->count() > 0)
            <div class="flex flex-col items-center justify-center space-y-1 md:flex-row md:justify-start md:space-x-6">
              <a class="btn btn-outline btn-wide rounded-full border-2 border-primary text-lg text-neutral-content"
                 href="/moodle-{{ config('hyde.moodle.versions')->first() }}">
                Try newest
                <span class="badge badge-primary">{{ config('hyde.moodle.versions')->first() }}</span>
                <i class="las la-arrow-right text-xl"></i>
              </a>

              @if (config('hyde.moodle.versions')->count() > 1)
                <div class="divider divider-vertical font-bold text-neutral-content md:divider-horizontal">
                  OR
                </div>

                <details class="dropdown">
                  <summary class="btn btn-secondary btn-wide m-1 rounded-full">Other versions</summary>
                  <ul class="menu dropdown-content z-[1] w-52 rounded-box bg-base-100 p-2 shadow">
                    @foreach (config('hyde.moodle.versions')->skip(1) as $moodleVersion)
                      <li>
                        <a href="/moodle-{{ $moodleVersion }}">
                          Try version
                          <span class="badge badge-secondary">{{ $moodleVersion }}</span>
                          <i class="las la-arrow-right text-xl"></i>
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </details>
              @endif
            </div>
          @endif
        </section>
      </div>
    </div> <!-- End Primary Hero -->

    <!-- Secondary Hero -->
    <div class="prose-invert hero">
      <div class="hero-content grid w-full grid-cols-1 items-start bg-base-200 md:grid-cols-3">

        <div class="card h-full border shadow-lg">
          <div class="card-body">
            <h2 class="card-title"><i class="las la-exclamation-circle"></i> Disclaimer</h2>
            <p>Learning Sandbox Online is not affiliated with <a href="https://moodle.com">Moodle HQ</a></p>
          </div>
        </div>

        <div class="card h-full border shadow-lg">
          <div class="card-body">
            <h2 class="card-title"><i class="las la-hourglass-half"></i> Automatic Reset</h2>
            <p>Every hour, at 30 minutes past the hour, each Moodle instance is reset to default content and
              configuration.</p>
          </div>
        </div>

        <div class="card h-full border shadow-lg">
          <div class="card-body">
            <h2 class="card-title"><i class="las la-puzzle-piece"></i> Additional Plugins</h2>
            <p>The installation of additional plugins are disabled in order to make the automatic upgrade possible.</p>
          </div>
        </div>

        <div class="card h-full border shadow-lg">
          <div class="card-body">
            <h2 class="card-title"><i class="las la-envelope"></i> Emails</h2>
            <p>The sending of email messages is disabled to prevent spam.</p>
          </div>
        </div>

      </div>
    </div> <!-- End Secondary Hero -->
  </main>
@endsection
