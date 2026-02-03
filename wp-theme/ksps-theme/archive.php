<?php if (!defined('ABSPATH')) { exit; } ?>
<?php get_header(); ?>

<div class="container mx-auto px-4 py-10">
  <h1 class="text-3xl font-bold mb-6"><?php the_archive_title(); ?></h1>
  <?php if (have_posts()) : ?>
    <div class="space-y-8">
      <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('prose max-w-none'); ?>>
          <h2 class="text-2xl font-semibold"><a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title(); ?></a></h2>
          <div class="text-sm opacity-70 mb-2"><?php echo esc_html(get_the_date()); ?></div>
          <div class="entry-summary"><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
    </div>
    <div class="mt-8">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <p><?php esc_html_e('No posts found.', 'ksps'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
