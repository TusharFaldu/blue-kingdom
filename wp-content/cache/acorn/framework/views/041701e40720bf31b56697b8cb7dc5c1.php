<!-- Hero Section with Background -->
 <?php
  $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
  $featured_image = $featured_image_url ?: get_field('home_hero_section_image');
?>

<section class="-mt-[100px] relative h-screen bg-cover bg-center flex items-center" style="background-image: url('<?php echo e($featured_image); ?>');">
  <div class="w-full flex flex-col gap-y-20 mt-10 lg:flex-row lg:mt-0 justify-between px-10 lg:px-20">
    <div>
      <h1 id="hero-heading" class="font-heading text-white text-5xl md:text-7xl uppercase leading-tight transition-opacity duration-1000">
      <?php echo get_field('home_hero_section_title'); ?>

      </h1>
    </div>

    <?php if(have_rows('site_social_list', 'option')): ?>
      <div class="flex flex-row lg:flex-col gap-10 items-center justify-center max-sm:right-5">
        <?php while(have_rows('site_social_list', 'option')): ?> <?php the_row() ?>
          <a href="<?php echo e(get_sub_field('site_social_link')); ?>" aria-label="Follow us on <?php echo e(get_sub_field('site_social_title')); ?>" class="hover:opacity-80 transition-opacity">
            <img src="<?php echo e(get_sub_field('social_icon')); ?>" alt="<?php echo e(get_sub_field('site_social_title')); ?>"  class="w-6 h-6 hover:opacity-80 transition-opacity" />
          </a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if(get_field('home_hero_want_to_show_bottom_shape')): ?>
    <img src="<?php echo e(get_field('home_hero_shape_image')); ?>" alt="Wave" class="absolute bottom-0 left-0 w-full z-10" />
  <?php endif; ?>
</section>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/components/home/hero.blade.php ENDPATH**/ ?>