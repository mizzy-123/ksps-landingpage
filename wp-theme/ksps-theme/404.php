<?php if (!defined('ABSPATH')) { exit; } ?>
<?php get_header(); ?>

<div class="container mx-auto px-4 py-20 text-center">
  <h1 class="text-5xl font-extrabold mb-4">404</h1>
  <p class="mb-8"><?php esc_html_e('Sorry, the page you are looking for could not be found.', 'ksps'); ?></p>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-6 py-3 rounded bg-secondary text-white hover:opacity-90">Return Home</a>
  </div>

<?php get_footer(); ?>
