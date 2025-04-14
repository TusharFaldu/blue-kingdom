<!doctype html>
<html <?php (language_attributes()); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php (do_action('get_header')); ?>
    <?php (wp_head()); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
  </head>

  <body class="bg-gray-100 text-gray-900 font-sans">
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
  <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php (wp_footer()); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/layouts/app.blade.php ENDPATH**/ ?>