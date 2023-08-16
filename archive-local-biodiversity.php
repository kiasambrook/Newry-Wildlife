<?php
/**
 * Template Name: Local Biodiversity Archive
 * Description: Custom template for Local Biodiversity archive.
 */
get_header();
?>
<section class="py-32 bg-gray-100">
  <div class="container mx-auto">
    <h2 class="text-3xl font-semibold mb-6 text-gray-800">Local Biodiversity Archive</h2>

    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Customize the content here for each post -->
            <h3 class="text-xl font-semibold p-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="p-4">
              <?php the_excerpt(); ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
