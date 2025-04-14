<section class="flex flex-col self-stretch max-md:self-center">
  <div class="flex flex-wrap lg:flex-row max-lg:flex-col-reverse justify-center items-center gap-10 md:gap-20 px-20 pt-12 max-md:px-5 max-md:py-5 max-md:max-w-full">
    
    
    <article class="flex flex-col flex-1 justify-center my-auto basis-0 max-w-xl max-md:max-w-full">
      <?php if(get_field('home_our_boat_section_title')): ?>
        <header class="flex flex-col justify-center w-full text-5xl mb-5 uppercase text-blue-950 max-md:max-w-full max-md:text-4xl max-md:text-center">
          <h2 class="font-heading w-full max-md:max-w-full">
            <?php echo e(get_field('home_our_boat_section_title')); ?>

          </h2>
        </header>
      <?php endif; ?>

      <?php if(get_field('home_our_boat_short_text')): ?>
  <?php echo wpautop(get_field('home_our_boat_short_text')); ?>

<?php endif; ?>

      <?php
        $boatBtnLink = get_field('home_our_boat_button_link');
        $boatBtnText = get_field('home_our_boat_button_caption');
      ?>

      <?php if($boatBtnLink && $boatBtnText): ?>
        <a
          href="<?php echo e($boatBtnLink); ?>"
          class="gap-2.5 self-start px-7 py-3 mt-5 font-semibold text-center text-[#49BCFF] uppercase rounded border-2 border-solid border-[color:var(--Blue-1,#49BCFF)] max-md:px-5 hover:bg-[#49BCFF] hover:text-white transition-colors duration-300"
          aria-label="<?php echo e($boatBtnText); ?>"
        >
          <?php echo e($boatBtnText); ?>

        </a>
      <?php endif; ?>
    </article>

    
    <?php $image = get_field('home_our_boat_image'); ?>
    <?php if(!empty($image) && !empty($image['url'])): ?>
      <img
        src="<?php echo e($image['url']); ?>"
        alt="<?php echo e($image['alt'] ?? 'Our boat fleet'); ?>"
        class="object-contain self-center my-auto rounded min-w-10 max-w-[550px] max-md:max-w-full"
      />
    <?php endif; ?>

  </div>
</section>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/components/home/boats.blade.php ENDPATH**/ ?>