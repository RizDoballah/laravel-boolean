@include('layouts.partials._header')
      {{-- Header --}}
      <header>
        @yield('header')
      </header>
      {{-- /Header --}}

      {{-- Main --}}
      <main>
        @yield('main')
      </main>
      {{-- /Main --}}

      {{-- Footer --}}
      <footer>
        @yield('footer')
      </footer>
      {{-- /Footer --}}
      @yield('scripts')

@include('layouts.partials._footer')
