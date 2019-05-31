<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<hr>

<?php if (is_active_sidebar('showcase')) : ?>
  <div class="row showcase">
    <div class="large-12 columns">
      <div class="callout secondary">
        <?php dynamic_sidebar('showcase'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>




<div class="grid-container my-grid">
  <div class="grid-container full">
    <div class="grid-x grid-margin-x grid-padding-y">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="medium-4 cell">
            <h3><?php the_title(); ?></h3>
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>

            <a class="button" href="<?php echo the_permalink(); ?>">Details</a></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="large-4 medium-4 columns">
    <?php if (is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer();
