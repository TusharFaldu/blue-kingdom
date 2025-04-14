
<section class="flex flex-col items-center self-stretch px-0 pt-10 bg-white">
  <div class="flex flex-wrap gap-10 md:gap-25 justify-center items-center max-w-full w-full">
  @php while(has_sub_field('review_logos_section')): @endphp
    <article class="flex flex-col justify-center items-center self-stretch my-auto w-[180px]">
      <div class="flex flex-col justify-center items-center max-w-full w-[180px]">
        @php $logo = get_sub_field('home_review_logo'); @endphp
        <img src="{{ $logo['url'] }}" alt="{{ $logo['title'] }}" class="object-contain w-full" />
        <div class="flex flex-col items-center mt-2.5">
          @if(get_sub_field('home_review_text'))
          <h2 class="gap-2.5 self-stretch text-xl font-semibold text-center uppercase text-blue-950">
            @php echo get_sub_field('home_review_text'); @endphp
          </h2>
          @endif
          @php $stars = get_sub_field('rating_star');  @endphp
          @if($stars != '0')
          <div class="flex gap-2.5 items-center">
           <p class="self-stretch my-auto text-xl font-bold text-center text-red-600">
              @php echo get_sub_field('rating_star'); @endphp.0
            </p>       
            <div class="flex gap-2.5 items-start self-stretch my-auto">
              @for ($i = 0; $i < $stars; $i++)
              <img src="{{ site_url() }}/wp-content/uploads/2025/04/star-1.svg" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square" />
              @endfor
            </div>
          </div>
          @endif
        </div>
      </div>
    </article>
    @php endwhile; wp_reset_query(); @endphp
  </div>
