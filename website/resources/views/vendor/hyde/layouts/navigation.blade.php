@php
  $navigation = \Hyde\Framework\Features\Navigation\NavigationMenu::create();
@endphp

<nav class="flex flex-wrap items-center justify-between p-4 shadow-lg dark:bg-gray-800 sm:shadow-xl md:shadow-none"
     id="main-navigation"
     aria-label="Main navigation">
  <div class="flex flex-shrink-0 flex-grow items-center text-gray-700 dark:text-gray-200">
    @include('hyde::components.navigation.navigation-brand')

    <div class="ml-auto">
      <x-hyde::navigation.theme-toggle-button />
    </div>
  </div>

  <div class="block md:hidden">
    <button class="flex items-center px-3 py-1 hover:text-gray-700 dark:text-gray-200"
            id="navigation-toggle-button"
            aria-label="Toggle navigation menu"
            @click="navigationOpen = ! navigationOpen">
      <svg class="dark:fill-gray-200"
           id="open-main-navigation-menu-icon"
           x-show="! navigationOpen"
           title="Open Navigation Menu"
           style="display: block;"
           xmlns="http://www.w3.org/2000/svg"
           height="24"
           viewBox="0 0 24 24"
           width="24">
        <title>Open Menu</title>
        <path d="M0 0h24v24H0z"
              fill="none" />
        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
      </svg>
      <svg class="dark:fill-gray-200"
           id="close-main-navigation-menu-icon"
           x-show="navigationOpen"
           title="Close Navigation Menu"
           style="display: none;"
           xmlns="http://www.w3.org/2000/svg"
           height="24"
           viewBox="0 0 24 24"
           width="24">
        <title>Close Menu</title>
        <path d="M0 0h24v24H0z"
              fill="none"></path>
        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
        </path>
      </svg>
    </button>
  </div>

  <div class="x-uncloak-md -mx-4 mt-3 w-full flex-grow border-t border-gray-200 px-6 pt-3 dark:border-gray-700 md:mt-0 md:flex md:w-auto md:flex-grow-0 md:items-center md:border-none md:py-0"
       id="main-navigation-links"
       :class="navigationOpen ? '' : 'hidden'"
       x-cloak>
    <ul class="justify-end md:flex md:flex-grow"
        aria-label="Navigation links">
      @foreach ($navigation->items as $item)
        <li class="md:mx-2">
          @if ($item instanceof \Hyde\Framework\Features\Navigation\DropdownNavItem)
            <x-hyde::navigation.dropdown :label="\Hyde\Hyde::makeTitle($item->label)"
                                         :items="$item->items" />
          @else
            @include('hyde::components.navigation.navigation-link')
          @endif
        </li>
      @endforeach
    </ul>
  </div>
</nav>
