<section
  class="flex relative flex-col self-stretch  mt-20 py-20 pb-52 bg-[#F1F1F1] md:bg-[#142C58] max-md:px-5 max-md:pb-24"
>
<?php if(get_field('home_excursions_blocks')): ?>
  <h2 class="font-heading flex z-0 flex-col justify-center self-center max-w-full text-5xl text-center text-black md:text-white uppercase w-[1000px] max-md:text-4xl">
  <?php echo get_field('home_excursions_section_title'); ?>

  </h2>
  <?php endif; ?>

  <div
    class="slick-slider max-[767px]:px-0 flex z-0 flex-row gap-10 justify-center items-center mt-14 w-full max-md:mt-10 max-md:max-w-full"
  >

    <!-- Card 1 -->
     <?php while(has_sub_field('home_excursions_blocks')): ?>
    <article class="shadow-sm px-4 min-w-60 w-[336px]">
      <div class="w-full">
        <div
          class="flex overflow-hidden relative flex-col items-end w-full text-sm font-bold text-center text-white rounded aspect-[1.344] min-h-[250px]"
        >
          <img
            src="<?php echo e(get_sub_field('home_excursions_block_image')); ?>"
            alt="Whale and Wildlife Adventure Zodiac Boat"
            class="object-cover absolute inset-0 size-full"
          />
          <?php if(get_sub_field('home_excursions_want_to_show_ribbon_text') == 1): ?>
          <p
            class="relative px-5 py-2 max-w-full bg-[#49BCFF] rounded-none w-[168px]"
          >
            <?php echo e(get_sub_field('home_excursions_ribbon_text')); ?> 
          </p>
          <?php endif; ?>
        </div>
        <div
          class="p-7 w-full text-base font-semibold bg-white rounded-none max-md:px-5"
        >
          <h2 class="w-full text-xl text-center uppercase text-blue-950">
          <?php echo get_sub_field('home_excursions_block_title'); ?> 
          </h2>
          
          <div class="mt-5 w-full text-zinc-800">
            <?php if(get_sub_field('home_excursions_inquiry_hour') || get_sub_field('home_excursions_inquiry_age')): ?>
            <div class="flex gap-2.5 items-start w-full">
            <?php if(get_sub_field('home_excursions_inquiry_hour')): ?>
              <div class="flex flex-1 shrink gap-2 justify-center basis-0">
                <img
                  src="<?php echo e(site_url()); ?>/wp-content/uploads/2025/04/Durationicon.svg"
                  alt="Duration icon"
                  class="object-contain shrink-0 my-auto w-5 aspect-square"
                />
                <p class="flex-1 shrink basis-0"><?php echo e(get_sub_field('home_excursions_inquiry_hour')); ?></p>
              </div>
              <?php endif; ?>
              <?php if(get_sub_field('home_excursions_inquiry_age')): ?>
              <div class="flex flex-1 shrink gap-2 justify-center basis-0">
                <img
                 src="<?php echo e(site_url()); ?>/wp-content/uploads/2025/04/Ageicon.svg"
                  alt="Age icon"
                  class="object-contain shrink-0 my-auto w-5 aspect-square"
                />
                <p class="flex-1 shrink basis-0"><?php echo e(get_sub_field('home_excursions_inquiry_age')); ?></p>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if(get_sub_field('home_excursions_inquiry_adults')): ?>
            <div class="flex gap-2 justify-center mt-3.5 w-full">
              <img
               src="<?php echo e(site_url()); ?>/wp-content/uploads/2025/04/Priceicon.svg"
                alt="Price icon"
                class="object-contain shrink-0 my-auto w-5 aspect-square"
              />
              <p class="flex-1 shrink basis-0"><?php echo e(get_sub_field('home_excursions_inquiry_adults')); ?></p>
            </div>
            <?php endif; ?>
            <?php if(get_sub_field('home_excursions_inquiry_kids')): ?>
            <div class="flex gap-2 justify-center mt-3.5 w-full">
              <img
               src="<?php echo e(site_url()); ?>/wp-content/uploads/2025/04/Priceicon.svg"
                alt="Price icon"
                class="object-contain shrink-0 my-auto w-5 aspect-square"
              />
              <p class="flex-1 shrink basis-0"><?php echo e(get_sub_field('home_excursions_inquiry_kids')); ?></p>
            </div>
            <?php endif; ?>
          </div>
          
          <div
            class="flex gap-2.5 justify-center items-start mt-5 w-full text-center uppercase"
          >

          
            <button class="flex-1 shrink gap-2.5 self-stretch px-4 py-3 text-[#49BCFF] rounded border-2 border-solid basis-[11px] border-[color:var(--Blue-1,#49BCFF)]">
              Learn More
            <button
              class="flex-1 shrink gap-2.5 self-stretch py-3 pr-6 pl-5 bg-[#FFDA1D] rounded basis-0 text-blue-950 max-md:px-5"
            >
              Book Now
            </button>
          
          </div>
        </div>
      </div>
    </article>
<?php endwhile; ?> wp_reset_query();
  </div>

  <?php if(get_field("home_excursions_want_to_show_bottom_shape") == 1): ?>
  <?php $image = get_field('home_excursions_shape_image'); ?>
  <?php if($image): ?>
    <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt'] ?? 'Decorative wave'); ?>" class="object-contain absolute right-0 -bottom-px z-0 fill-white w-full max-md:max-w-full" />
  <?php endif; ?>
<?php endif; ?>
</section>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/components/home/excursions.blade.php ENDPATH**/ ?>