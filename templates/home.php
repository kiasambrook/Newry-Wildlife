<?php

/**
 * Template name: Home page
 */
get_header();
?>

<!-- About -->
<section class="py-32 bg-gray-100">
    <div class="container mx-auto flex flex-col items-center lg:flex-row lg:items-start">
        <div class="w-full lg:w-1/2 lg:order-2 mt-8 lg:mt-0 md:ml-2">
            <h2 class="text-3xl font-semibold mb-4 text-gray-800"><?php the_field('about_title'); ?></h2>
            <p class="text-gray-700 mb-6">
                <?php the_field('about_text'); ?>
            </p>
            <?php $about_link = get_field('about_link'); ?>
            <?php if ($about_link) : ?>
                <a class="text-primary hover:underline" href="<?php echo esc_url($about_link['url']); ?>" target="<?php echo esc_attr($about_link['target']); ?>"><?php echo esc_html($about_link['title']); ?></a>
            <?php endif; ?>
        </div>
        <?php $about_image = get_field( 'about_image' ); ?>
        <?php if ( $about_image ) : ?>
            <div class="w-full lg:w-1/2 lg:order-1 mt-8 lg:mt-0 flex justify-center items-center">
                <div class="relative rounded overflow-hidden">
                    <img src="<?php echo esc_url( $about_image['url'] ); ?>" alt="<?php echo esc_attr( $about_image['alt'] ); ?>" class="object-cover w-full h-full">
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Blog -->
<section class="py-32 bg-gray-100">
  <div class="container mx-auto">
    <h2 class="text-3xl font-semibold mb-6 text-gray-800">Latest Blog Posts</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'order'          => 'DESC',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="h-48 w-full bg-cover bg-center" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>');"></div>
            <div class="p-4">
              <p class="text-gray-400 text-sm"><?php echo get_the_date(); ?></p>
              <h3 class="text-xl font-semibold mt-2"><a href="<?php the_permalink(); ?>" class="text-primary hover:underline"><?php the_title(); ?></a></h3>
              <p class="text-gray-600 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              <a href="<?php the_permalink(); ?>" class="text-primary hover:underline inline-block mt-2">Read More</a>
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No blog posts found.</p>';
      endif;
      ?>
    </div>
  </div>
</section>

<?php get_footer() ?>