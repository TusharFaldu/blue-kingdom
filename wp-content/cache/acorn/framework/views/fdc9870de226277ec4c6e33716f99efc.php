<section
  class="relative w-full gap-10 p-10 text-center uppercase min-h-[306px] max-md:px-5"
>
<?php $image = get_field('home_adventure_background_image'); ?>
<?php if($image): ?>
  <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt'] ?? 'Adventure background'); ?>" class="object-cover absolute inset-0 size-full" />
<?php endif; ?>

  <div
    class="flex relative flex-col flex-1 shrink justify-center py-10 w-full rounded basis-0 min-w-60 max-md:max-w-full"
  >
    <h2
      class="flex flex-col justify-center w-full text-6xl text-white max-md:max-w-full max-md:text-4xl"
    >
      <span class="font-heading w-full max-md:max-w-full max-md:text-4xl">
        <?php echo e(get_field('home_adventure_section_title')); ?>

      </span>
    </h2>
    <a href="<?php echo e(get_field('home_adventure_button_link')); ?>" class="gap-2.5 self-center px-7 py-3 mt-5 text-base font-semibold bg-[#FFDA1D] rounded text-blue-950 max-md:px-5">
    <?php echo e(get_field('home_adventure_button_caption')); ?>

    </a>
  </div>
</section>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/components/home/cta.blade.php ENDPATH**/ ?>