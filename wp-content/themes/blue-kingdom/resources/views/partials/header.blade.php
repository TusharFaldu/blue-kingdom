<header class="sticky top-0 w-full z-50 bg-[#142C58] top-0 left-0 bg-transparent">
  <!-- Alert Bar -->
  <div class="font-heading uppercase p-2.5 text-3xl text-center text-[#FFDA1D] bg-[#142C58] max-sm:text-2xl">
    {!! get_field('header_top_bar_text', 'option') !!}
  </div>  

  <!-- Main Header -->
  <div class="text-white">
    <div id="main-header-inner" class="flex justify-between items-center px-8 lg:px-10 max-lg:bg-[#142C58]">
      
      <!-- Logo -->
      <a href="{{ home_url('/') }}" class="flex items-center">
        @if(get_field('site_main_logo', 'option'))
          <img src="{{ get_field('site_main_logo', 'option') }}" alt="Blue Kingdom" class="w-[170px] h-[67px]">
        @else
          <img src="@asset('images/logo-white.png')" alt="Blue Kingdom" class="w-[170px] h-[67px]">
        @endif
      </a>

      <!-- Nav -->
      @php
        $menu_items = wp_get_nav_menu_items(2);
      @endphp

      @if($menu_items)
        <nav class="hidden lg:flex gap-4 font-semibold text-sm uppercase text-white">
          @foreach($menu_items as $item)
            <a href="{{ esc_url($item->url) }}" class="hover:text-[#FFDA1D]">
              {{ esc_html($item->title) }}
            </a>
          @endforeach
        </nav>
      @endif

      <!-- CTA Button -->
      @if(get_field('header_button_caption', 'option'))
        
        <a href="{{ get_field('header_button_link', 'option') }}" class="ml-6 hidden lg:inline-block text-black bg-[#FFDA1D] font-bold px-4 py-2 rounded uppercase text-sm shadow hover:bg-yellow-300 transition">
          {{ get_field('header_button_caption', 'option') }}
        </a>
        
      @endif

      <!-- Mobile Toggle -->
      <button class="lg:hidden block text-white focus:outline-none" id="menu-toggle">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

    <!-- Mobile Nav -->
    @if($menu_items)
      <div class="flex lg:hidden hidden p-4 pb-4 bg-[#142C58]" id="mobile-menu">
        <nav class="flex flex-col gap-4 font-semibold text-sm uppercase">
          @foreach($menu_items as $item)
            <a href="{{ esc_url($item->url) }}" class="hover:text-[#FFDA1D]">
              {{ esc_html($item->title) }}
            </a>
          @endforeach

          <a href="{{ get_field('header_button_link', 'option') }}" class="mt-2 bg-[#FFDA1D] text-blue-900 px-4 py-2 rounded text-center font-bold">
            {{ get_field('header_button_caption', 'option') }}
          </a>
        </nav>
      </div>
    @endif
  </div>
</header>
