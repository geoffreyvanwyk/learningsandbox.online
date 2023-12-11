@extends('hyde::layouts.app')
@push('styles')
  <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
@endpush
@section('content')
  <main id="content">
    <div class="hero min-h-screen bg-base-200"
         style="background-image: url('/media/hero_background.jpg')">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-neutral-content">
        <section>
          <h1 class="flex items-center text-5xl font-bold">
            <img class="h-16"
                 src="/media/moodle_logo.svg">&nbsp;&nbsp;at your fingertips
          </h1>
          <p class="py-6 text-xl">
            An installation of each supported version of the open source
            learning management system Moodle, the
            <span class="font-bold">M</span>odular
            <span class="font-bold">O</span>bject-
            <span class="font-bold">O</span>riented
            <span class="font-bold">D</span>ynamic
            <span class="font-bold">L</span>earning
            <span class="font-bold">E</span>nvironment.
            See how it looks, learn how it works, compare features between
            versions, find out what is new.
          </p>
          <div class="flex space-x-6">
            <a class="btn btn-outline btn-wide mb-2 rounded-full border-warning text-lg text-neutral-content"
               href="/moodle-{{ config('hyde.moodle.versions')->first() }}">
              Try newest
              <span class="badge badge-warning">{{ config('hyde.moodle.versions')->first() }}</span>
              <i class="fas fa-arrow-right text-xl"></i>
            </a>
            <div>
              Other versions:
              <div class="join">
                @foreach (config('hyde.moodle.versions')->skip(1) as $moodleVersion)
                  <a class="btn btn-outline join-item rounded-full text-neutral-content"
                     href="/moodle-{{ $moodleVersion }}">{{ $moodleVersion }}</a>
                @endforeach
              </div>
            </div>
        </section>
      </div>
    </div>
  </main>
@endsection
