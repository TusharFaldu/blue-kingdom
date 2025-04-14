<section class="self-stretch px-0 md:py-24 py-10 text-center bg-white">
  <div class="flex relative p-5 w-full max-md:max-w-full">
  <?php $image = get_field('home_map_image') ?>
<?php if($image): ?>
  <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt'] ?? 'Background scenic view'); ?>" class="object-cover absolute inset-0 size-full"/>
<?php endif; ?>

    <div class="relative w-full flex flex-wrap lg:flex-row max-lg:flex-col-reverse justify-between ">
    <article class="flex-1 mx-auto text-white max-w-80 md:w-[369px]">
      <div class="px-5 py-14 w-full self-center rounded shadow-sm bg-[#142C58]">
        <div class="flex flex-col justify-center w-full">
          <div class="flex flex-col justify-center w-full">
            <div class="flex flex-col items-center w-full">
              <h2 class="text-5xl uppercase max-md:text-4xl">
                45 minutes
              </h2>
              <p class="mt-1 text-2xl">
                From Bellingham
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-col justify-center mt-10 w-full">
          <div class="flex flex-col items-center w-full">
            <h2 class="text-5xl uppercase max-md:text-4xl">
              1 hour
            </h2>
            <p class="mt-1 text-2xl">
              From Everett
            </p>
          </div>
        </div>

        <div class="flex flex-col justify-center mt-10 w-full">
          <div class="flex flex-col justify-center w-full">
            <div class="flex flex-col items-center w-full">
              <h2 class="text-5xl uppercase max-md:text-4xl">
                1.5 hours
              </h2>
              <p class="mt-1 text-2xl">
                From Seattle
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="flex flex-col flex-1 shrink justify-center p-11 uppercase rounded shadow-sm basis-0 min-w-60 max-md:px-5 max-md:max-w-full">
      <h2 class="font-heading flex flex-col justify-center w-full text-6xl text-[#142C58] max-md:max-w-full max-md:text-4xl">
        <?php echo get_field('home_map_section_title'); ?>

      </h2>

      <a href="<?php echo e(get_field('home_map_button_link')); ?>" class="flex gap-2.5 justify-center items-center self-center px-7 py-3 mt-5 text-base font-semibold text-white rounded bg-[#142C58] max-md:px-5">
        <span class="self-stretch my-auto">
          <?php echo e(get_field('home_map_direction_button_caption')); ?>

        </span>
      
</a>
    </article>

    </div>

    

    
  </div>
</section>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/components/home/map.blade.php ENDPATH**/ ?>