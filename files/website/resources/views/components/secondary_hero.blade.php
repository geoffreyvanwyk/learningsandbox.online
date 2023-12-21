@php
  $informationCards = collect([
      [
          'title' => 'Credentials',
          'icon' => 'key',
          'description' => '
                Log in as the site administration with:
                <ul>
                    <li class="flex flex-wrap justify-between"><span class="font-bold"><i class="bx bx-user"></i> Username</span> <span>moodler</span></li>
                    <li class="flex flex-wrap justify-between"><span class="font-bold"><i class="bx bx-lock"></i> Password</span> <span>N3verstople@rning</span></li>
                </ul>
          ',
      ],
      [
          'title' => 'Disclaimer',
          'icon' => 'error',
          'description' => 'Learning Sandbox Online is not affiliated with <a href="https://moodle.com">Moodle HQ</a>',
      ],
      [
          'title' => 'Automatic Reset',
          'icon' => 'hourglass',
          'description' => 'Every hour, at 30 minutes past the hour, each Moodle instance is reset to default content and
                configuration.',
      ],
      [
          'title' => 'Additional Plugins',
          'icon' => 'plug',
          'description' => 'The installation of additional plugins are disabled in order to make the automatic upgrade possible.',
      ],
      [
          'title' => 'Emails',
          'icon' => 'envelope',
          'description' => 'The sending of email messages is disabled to prevent spam.',
      ],
  ])->transform(function ($informationCard) {
      return (object) $informationCard;
  });

@endphp

<div class="hero">
  <div class="hero-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

    @foreach ($informationCards as $informationCard)
      <div class="border-1 prose-invert card h-full border-accent bg-white shadow-lg">
        <div class="card-body p-4 md:p-8">
          <h2 class="card-title text-primary">
            <i class="bx bx-{{ $informationCard->icon }}"></i>
            {{ $informationCard->title }}
          </h2>
          <p>{!! $informationCard->description !!}</p>
        </div>
      </div>
    @endforeach

  </div>
</div>
