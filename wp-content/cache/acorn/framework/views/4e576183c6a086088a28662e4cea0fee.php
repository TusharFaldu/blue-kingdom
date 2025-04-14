<footer class="w-full bg-[#142C58] p-14 max-sm:p-8">
  <div class="mx-auto flex max-w-[1400px] flex-row gap-24 mb-5 max-md:flex-col max-md:gap-10">
    <!-- Logo + Social -->
    <div class="flex flex-col gap-16">
      <a href="<?php echo e(home_url('/')); ?>" class="flex items-center gap-2">
        <?php if(get_field('site_main_logo', 'option')): ?>
          <img src="<?php echo e(get_field('site_main_logo', 'option')); ?>" alt="Blue Kingdom" class="h-[85px] w-[212px]">
        <?php else: ?>
          <img src="<?= \Roots\asset('images/logo-white.png'); ?>" alt="Blue Kingdom" class="h-[85px] w-[212px]">
        <?php endif; ?>
      </a>
      <?php if(get_field('want_to_show_social_icons','option') == 1): ?>
      <section class="flex flex-col gap-4">
        <h2 class="text-base font-bold text-white uppercase">Social Links</h2>
        <nav class="flex items-center gap-10">
        <?php while(have_rows('footer_site_social_list', 'option')): ?> <?php the_row() ?>
          <a href="<?php echo e(get_sub_field('footer_site_social_link')); ?>" aria-label="Follow us on <?php echo e(get_sub_field('footer_site_social_title')); ?>">
            <img src="<?php echo e(get_sub_field('footer_social_icon')); ?>" alt="<?php echo e(get_sub_field('footer_site_social_title')); ?>"  class="text-white hover:text-[#FFDA1D] transition-colors" />
          </a>
        <?php endwhile; ?>

        </nav>
      </section>
      <?php endif; ?>
    </div>

    <div class="flex flex-wrap gap-24 max-md:gap-10 max-sm:flex-col max-sm:gap-8">
      <section>
        <h2 class="mb-3.5 text-xl font-medium text-white uppercase">
          <?php echo e(get_field('footer_contact_block_title','option')); ?>

        </h2>
        <address class="flex flex-col gap-3.5 not-italic">
          <p class="flex gap-2 text-base text-white">
            <span>Phone:</span>
            <a href="tel:<?php echo e(get_field('footer_contact_phone','option')); ?>" class="text-[#FFDA1D]"
              ><?php echo e(get_field('footer_contact_phone','option')); ?></a
            >
          </p>
          <p class="flex gap-2 text-base text-white">
            <span>Email:</span>
            <a href="mailto:<?php echo e(get_field('footer_contact_email','option')); ?>" class="text-white"><?php echo e(get_field('footer_contact_email','option')); ?></a>
          </p>
          <p class="text-base text-white"><?php echo get_field('footer_contact_address','option'); ?>

          </p>
        </address>
      </section>
      <?php
        $menu_items = wp_get_nav_menu_items(3);
      ?>

      <?php if($menu_items): ?>
      <nav>
        <h2 class="mb-3.5 text-xl font-medium text-white uppercase">
          <?php echo e(get_field('footer_quick_link_block_title','option')); ?>

        </h2>
        <ul class="flex flex-col gap-3">
        <?php $__currentLoopData = $menu_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(esc_url($item->url)); ?>" class="text-base text-white hover:text-[#FFDA1D]">
              <?php echo e(esc_html($item->title)); ?>

            </a></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </ul>
      </nav>
      <?php endif; ?>

      <section class="cstn-form-section">
        <h2 class="mb-3.5 text-xl font-medium text-white uppercase">
          <?php echo e(get_field('footer_newsletter_block_title','option')); ?>

        </h2>
        <?php echo do_shortcode(get_field('footer_newsletter_form_code', 'option')); ?>

      </section>
    </div>
  </div>

  <p class="text-base text-center text-white max-sm:text-sm">
    <?php echo e(get_field('footer_copyright_text','option')); ?>

  </p>
</footer>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/partials/footer.blade.php ENDPATH**/ ?>