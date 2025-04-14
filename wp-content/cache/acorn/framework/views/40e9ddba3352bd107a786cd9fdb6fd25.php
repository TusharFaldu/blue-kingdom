<section class="flex flex-col items-center px-0 pt-14 pb-5 w-full bg-white">
  <div class="flex flex-col gap-7 items-center w-full max-w-[1512px]">
    <header class="flex flex-col gap-5 items-center w-full">
      <h2
        class="font-heading text-5xl text-center uppercase text-[#142C58] max-md:text-4xl max-sm:text-3xl"
        >
        <?php echo e(get_field('home_insta_section_title')); ?>

      </h2>
      <a href="<?php echo e(get_field('home_insta_button_link')); ?>"
        class="px-7 py-3 text-base font-semibold text-white uppercase rounded cursor-pointer bg-[#142C58]"
        style="font-family: &quot;Prompt&quot;, sans-serif"
      >
        <?php echo e(get_field('home_insta_button_caption')); ?>

</a>
    </header>

    <?php
  $gallery = get_field('home_instagram_images');
?>

<?php if($gallery): ?>
  <div class="flex flex-col gap-5 w-full">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 items-center w-full gap-4 justify-center">
      <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image_url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <figure class="flex-1 max-md:flex-[0_1_calc(50%_-_10px)] max-sm:w-full">
          <img
            src="<?php echo e($image_url); ?>"
            alt="Instagram image"
            class="object-cover w-full shadow-sm h-[363px] max-md:h-[300px] max-sm:h-[250px]"
          />
        </figure>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php endif; ?>

  </div>
</section>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/components/home/instagram.blade.php ENDPATH**/ ?>