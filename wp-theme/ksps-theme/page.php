<?php if (!defined('ABSPATH')) { exit; } ?>
<?php get_header(); ?>

<div class="container mx-auto px-4 py-10">
  <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('prose max-w-none'); ?>>
      <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
