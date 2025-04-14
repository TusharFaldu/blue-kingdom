
<section class="flex flex-col items-center self-stretch px-0 pt-10 bg-white">
  <div class="flex flex-wrap gap-10 md:gap-25 justify-center items-center max-w-full w-full">
  <?php while(has_sub_field('review_logos_section')): ?>
    <article class="flex flex-col justify-center items-center self-stretch my-auto w-[180px]">
      <div class="flex flex-col justify-center items-center max-w-full w-[180px]">
        <?php $logo = get_sub_field('home_review_logo'); ?>
        <img src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['title']); ?>" class="object-contain w-full" />
        <div class="flex flex-col items-center mt-2.5">
          <?php if(get_sub_field('home_review_text')): ?>
          <h2 class="gap-2.5 self-stretch text-xl font-semibold text-center uppercase text-blue-950">
            <?php echo get_sub_field('home_review_text'); ?>
          </h2>
          <?php endif; ?>
          <?php $stars = get_sub_field('rating_star');  ?>
          <?php if($stars != '0'): ?>
          <div class="flex gap-2.5 items-center">
           <p class="self-stretch my-auto text-xl font-bold text-center text-red-600">
              <?php echo get_sub_field('rating_star'); ?>.0
            </p>       
            <div class="flex gap-2.5 items-start self-stretch my-auto">
              <?php for($i = 0; $i < $stars; $i++): ?>
              <img src="<?php echo e(site_url()); ?>/wp-content/uploads/2025/04/star-1.svg" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square" />
              <?php endfor; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </article>
    <?php endwhile; wp_reset_query(); ?>
  </div>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/components/home/reviews.blade.php ENDPATH**/ ?>