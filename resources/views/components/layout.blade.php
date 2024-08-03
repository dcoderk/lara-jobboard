<!DOCTYPE html>
<html lang="en" class="full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Jobs Board</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://laracasts.com/images/logo/logo-triangle.svg?v=3s" alt="Frontlinecoder">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://www.gravatar.com/avatar/89b74c5efbd15ebb8bf0b2b61ca00d8f?s=100&d=https%3A%2F%2Flaracasts.nyc3.digitaloceanspaces.com%2Fmembers%2Favatars%2Fdefault%2F152.png" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
          <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
          <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="data:image/jpeg;base64,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" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-none text-white">Jay Ramilo</div>
            <div class="text-sm font-medium leading-none text-gray-400">contact@frontlinecoder.com</div>
          </div>
          <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

      <x-button href="/jobs/create">Create Job</x-button>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>


</body>
</html>