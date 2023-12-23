@extends('hyde::layouts.app')
@php($title = 'Home')
@section('content')
  <main class="grid h-full grid-cols-1 justify-between"
        id="content">
    <!-- Primary Hero -->
    <div class="hero bg-base-200 bg-[url('/media/hero_background.jpg')]">

      <div class="hero-overlay bg-opacity-60"></div>

      <div class="hero-content text-neutral-content md:py-10">
        <section>
          <h1
              class="flex flex-col items-center justify-center space-x-3 text-3xl font-bold md:flex-row md:justify-start md:text-5xl">
            <img class="h-12 md:h-16"
                 src="/media/moodle_logo.svg">
            <span class="text-center">at your fingertips</span>
          </h1>

          <p class="prose-invert py-6 text-lg md:text-xl">
            An installation of each supported version of the open source
            learning management system <a href="https://moodle.org">Moodle</a>, the
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
                 href="/moodle-{{ config('hyde.moodle.versions')->first() }}"
                 target="_blank">
                Try newest
                <span class="badge badge-primary">{{ config('hyde.moodle.versions')->first() }}</span>
                <i class="bx bx-right-arrow-alt text-xl"></i>
              </a>

              @if (config('hyde.moodle.versions')->count() > 1)
                <div class="divider divider-vertical font-bold text-neutral-content md:divider-horizontal">
                  OR
                </div>

                <details class="dropdown-top dropdown">
                  <summary class="btn btn-secondary btn-wide m-1 rounded-full">Other versions</summary>
                  <ul class="menu dropdown-content z-50 w-52 rounded-box bg-base-100 p-2 shadow">
                    @foreach (config('hyde.moodle.versions')->skip(1) as $moodleVersion)
                      <li class="text-black">
                        <a href="/moodle-{{ $moodleVersion }}"
                           target="_blank">
                          Try version
                          <span class="badge badge-secondary">{{ $moodleVersion }}</span>
                          <i class="bx bx-right-arrow-alt text-xl"></i>
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

    @include('components.secondary_hero')
  </main>
@endsection
