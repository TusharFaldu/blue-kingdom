<footer class="w-full bg-[#142C58] p-14 max-sm:p-8">
  <div class="mx-auto flex max-w-[1400px] flex-row gap-24 mb-5 max-md:flex-col max-md:gap-10">
    <!-- Logo + Social -->
    <div class="flex flex-col gap-16">
      <a href="{{ home_url('/') }}" class="flex items-center gap-2">
        @if(get_field('site_main_logo', 'option'))
          <img src="{{ get_field('site_main_logo', 'option') }}" alt="Blue Kingdom" class="h-[85px] w-[212px]">
        @else
          <img src="@asset('images/logo-white.png')" alt="Blue Kingdom" class="h-[85px] w-[212px]">
        @endif
      </a>
      @if(get_field('want_to_show_social_icons','option') == 1)
      <section class="flex flex-col gap-4">
        <h2 class="text-base font-bold text-white uppercase">Social Links</h2>
        <nav class="flex items-center gap-10">
        @while (have_rows('footer_site_social_list', 'option')) @php the_row() @endphp
          <a href="{{ get_sub_field('footer_site_social_link') }}" aria-label="Follow us on {{ get_sub_field('footer_site_social_title') }}">
            <img src="{{ get_sub_field('footer_social_icon') }}" alt="{{ get_sub_field('footer_site_social_title') }}"  class="text-white hover:text-[#FFDA1D] transition-colors" />
          </a>
        @endwhile

        </nav>
      </section>
      @endif
    </div>

    <div class="flex flex-wrap gap-24 max-md:gap-10 max-sm:flex-col max-sm:gap-8">
      <section>
        <h2 class="mb-3.5 text-xl font-medium text-white uppercase">
          {{get_field('footer_contact_block_title','option')}}
        </h2>
        <address class="flex flex-col gap-3.5 not-italic">
          <p class="flex gap-2 text-base text-white">
            <span>Phone:</span>
            <a href="tel:{{get_field('footer_contact_phone','option')}}" class="text-[#FFDA1D]"
              >{{get_field('footer_contact_phone','option')}}</a
            >
          </p>
          <p class="flex gap-2 text-base text-white">
            <span>Email:</span>
            <a href="mailto:{{get_field('footer_contact_email','option')}}" class="text-white">{{get_field('footer_contact_email','option')}}</a>
          </p>
          <p class="text-base text-white">{!! get_field('footer_contact_address','option') !!}
          </p>
        </address>
      </section>
      @php
        $menu_items = wp_get_nav_menu_items(3);
      @endphp

      @if($menu_items)
      <nav>
        <h2 class="mb-3.5 text-xl font-medium text-white uppercase">
          {{get_field('footer_quick_link_block_title','option')}}
        </h2>
        <ul class="flex flex-col gap-3">
        @foreach($menu_items as $item)
        <li><a href="{{ esc_url($item->url) }}" class="text-base text-white hover:text-[#FFDA1D]">
              {{ esc_html($item->title) }}
            </a></li>
          @endforeach
          
        </ul>
      </nav>
      @endif

      <section class="cstn-form-section">
        <h2 class="mb-3.5 text-xl font-medium text-white uppercase">
          {{get_field('footer_newsletter_block_title','option')}}
        </h2>
        {!! do_shortcode(get_field('footer_newsletter_form_code', 'option')) !!}
      </section>
    </div>
  </div>

  <p class="text-base text-center text-white max-sm:text-sm">
    {{get_field('footer_copyright_text','option')}}
  </p>
</footer>
