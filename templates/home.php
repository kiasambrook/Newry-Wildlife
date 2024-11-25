<?php

/**
 * Template name: Home page
 */
get_header();

$blogPosts = get_posts(['numberposts' => 3]);
$logo_url = get_option('logo_url');
$email = get_option('contact_email');
$twitter =  get_option('twitter');
$instagram =  get_option('instagram');
$facebook =  get_option('facebook');
$linkedin =  get_option('linkedin');
?>

<?php get_template_part('parts/hero'); ?>

<?php // Introduction 
?>
<section class="relative">
    <div id="text-1" class="flex flex-none flex-shrink-0 relative break-word items-center" style="min-height: calc(134px); z-index: 38;">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 z-10" style="background-color: rgb(255, 255, 255);"></div>
        </div>
        <div class="relative z-10 container mx-auto pt-12 lg:pt-20 pb-12 lg:pb-20">
            <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0">
                <div class="rich-text-block max-w-5xl text-left ml-0 mr-auto" style="color: rgb(17, 24, 39);">
                    <p class="large" style="white-space:pre-line"><?php the_field('introduction_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php // Events 
?>
<?= do_shortcode('[wfea layout="dean2023" thumb_align="eaw-alignleft" widgetwrap="false" show_prices="true" newtab="true"]'); ?>

<!-- <?php // Local Sites ? 
        ?>
<section class="relative">
    <div id="list-2" class="relative flex flex-none flex-shrink-0 break-word items-center" style="min-height: calc(134px); z-index: 37;">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 z-10" style="background-color: rgb(255, 255, 255);"></div>
        </div>
        <div class="relative z-10 container mx-auto pt-16 lg:pt-32 pb-16 lg:pb-32">
            <div>
                <div class="flex flex-wrap relative justify-center" style="gap: 40px;">
                    <div class="group w-full relative overflow-hidden rounded-lg md:rounded-xl lg:rounded-2xl" style="flex: 0 0 calc(50% - 20px);">
                        <div class="transition-all transition-all ease-in-out duration-500 delay-100 opacity-100 translate-y-0">
                            <div class="flex-shrink-0 relative aspect-w-1 aspect-h-1" style="min-height: 208px;"><span class="relative block" style="height: 208px;"></span><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="sun light passing through green leafed tree" src="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1518495973542-4542c06a5843%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwyMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90" decoding="async" data-nimg="fill" class="rounded-lg md:rounded-xl lg:rounded-2xl" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" srcset="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1518495973542-4542c06a5843%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwyMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=480&amp;q=90 480w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1518495973542-4542c06a5843%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwyMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=640&amp;q=90 640w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1518495973542-4542c06a5843%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwyMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=768&amp;q=90 768w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1518495973542-4542c06a5843%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwyMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1080&amp;q=90 1080w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1518495973542-4542c06a5843%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwyMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1200&amp;q=90 1200w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1518495973542-4542c06a5843%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwyMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90 1920w"></span></div>
                            <div class="absolute w-full bottom-0 left-0 flex flex-col justify-end" style="background-color: rgba(0, 0, 0, 0.8); min-height: 208px;">
                                <div class="flex flex-col text-center items-center p-6 justify-end" style="color: rgb(255, 255, 255);">
                                    <p class="heading-medium mb-4" style="color: currentcolor;">Guided Nature Walks</p>
                                    <div class="rich-text-block" style="color: currentcolor;">Explore stunning landscapes and observe native wildlife with our experienced guides.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group w-full relative overflow-hidden rounded-lg md:rounded-xl lg:rounded-2xl" style="flex: 0 0 calc(50% - 20px);">
                        <div class="transition-all transition-all ease-in-out duration-500 delay-200 opacity-100 translate-y-0">
                            <div class="flex-shrink-0 relative aspect-w-1 aspect-h-1" style="min-height: 208px;"><span class="relative block" style="height: 208px;"></span><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="river between mountains under white clouds" src="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1482938289607-e9573fc25ebb%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxNXx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90" decoding="async" data-nimg="fill" class="rounded-lg md:rounded-xl lg:rounded-2xl" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" srcset="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1482938289607-e9573fc25ebb%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxNXx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=480&amp;q=90 480w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1482938289607-e9573fc25ebb%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxNXx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=640&amp;q=90 640w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1482938289607-e9573fc25ebb%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxNXx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=768&amp;q=90 768w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1482938289607-e9573fc25ebb%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxNXx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1080&amp;q=90 1080w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1482938289607-e9573fc25ebb%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxNXx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1200&amp;q=90 1200w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1482938289607-e9573fc25ebb%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxNXx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90 1920w"></span></div>
                            <div class="absolute w-full bottom-0 left-0 flex flex-col justify-end" style="background-color: rgba(0, 0, 0, 0.8); min-height: 208px;">
                                <div class="flex flex-col text-center items-center p-6 justify-end" style="color: rgb(255, 255, 255);">
                                    <p class="heading-medium mb-4" style="color: currentcolor;">Nature Photography Workshops</p>
                                    <div class="rich-text-block" style="color: currentcolor;">Learn the art of capturing the beauty of nature through expert-led photography workshops.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group w-full relative overflow-hidden rounded-lg md:rounded-xl lg:rounded-2xl" style="flex: 0 0 calc(50% - 20px);">
                        <div class="transition-all transition-all ease-in-out duration-500 delay-300 opacity-100 translate-y-0">
                            <div class="flex-shrink-0 relative aspect-w-1 aspect-h-1" style="min-height: 208px;"><span class="relative block" style="height: 208px;"></span><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="low angle photography of trees at daytime" src="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1513836279014-a89f7a76ae86%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxOHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90" decoding="async" data-nimg="fill" class="rounded-lg md:rounded-xl lg:rounded-2xl" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" srcset="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1513836279014-a89f7a76ae86%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxOHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=480&amp;q=90 480w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1513836279014-a89f7a76ae86%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxOHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=640&amp;q=90 640w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1513836279014-a89f7a76ae86%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxOHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=768&amp;q=90 768w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1513836279014-a89f7a76ae86%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxOHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1080&amp;q=90 1080w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1513836279014-a89f7a76ae86%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxOHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1200&amp;q=90 1200w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1513836279014-a89f7a76ae86%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxOHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90 1920w"></span></div>
                            <div class="absolute w-full bottom-0 left-0 flex flex-col justify-end" style="background-color: rgba(0, 0, 0, 0.8); min-height: 208px;">
                                <div class="flex flex-col text-center items-center p-6 justify-end" style="color: rgb(255, 255, 255);">
                                    <p class="heading-medium mb-4" style="color: currentcolor;">Bird Watching Tours</p>
                                    <div class="rich-text-block" style="color: currentcolor;">Embark on bird-watching excursions to spot a variety of feathered species in their natural habitat.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group w-full relative overflow-hidden rounded-lg md:rounded-xl lg:rounded-2xl" style="flex: 0 0 calc(50% - 20px);">
                        <div class="transition-all transition-all ease-in-out duration-500 delay-400 opacity-100 translate-y-0">
                            <div class="flex-shrink-0 relative aspect-w-1 aspect-h-1" style="min-height: 208px;"><span class="relative block" style="height: 208px;"></span><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="gray concrete bridge and waterfalls during daytime" src="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1433086966358-54859d0ed716%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90" decoding="async" data-nimg="fill" class="rounded-lg md:rounded-xl lg:rounded-2xl" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" srcset="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1433086966358-54859d0ed716%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=480&amp;q=90 480w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1433086966358-54859d0ed716%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=640&amp;q=90 640w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1433086966358-54859d0ed716%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=768&amp;q=90 768w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1433086966358-54859d0ed716%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1080&amp;q=90 1080w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1433086966358-54859d0ed716%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1200&amp;q=90 1200w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1433086966358-54859d0ed716%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMHx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90 1920w"><noscript></noscript></span></div>
                            <div class="absolute w-full bottom-0 left-0 flex flex-col justify-end" style="background-color: rgba(0, 0, 0, 0.8); min-height: 208px;">
                                <div class="flex flex-col text-center items-center p-6 justify-end" style="color: rgb(255, 255, 255);">
                                    <p class="heading-medium mb-4" style="color: currentcolor;">Wildlife Conservation Talks</p>
                                    <div class="rich-text-block" style="color: currentcolor;">Join informative talks on efforts to preserve and protect the natural environment and its inhabitants.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group w-full relative overflow-hidden rounded-lg md:rounded-xl lg:rounded-2xl" style="flex: 0 0 calc(50% - 20px);">
                        <div class="transition-all transition-all ease-in-out duration-500 delay-500 opacity-100 translate-y-0">
                            <div class="flex-shrink-0 relative aspect-w-1 aspect-h-1" style="min-height: 208px;"><span class="relative block" style="height: 208px;"></span><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="bird's eye view photograph of green mountains" src="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501854140801-50d01698950b%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMnx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90" decoding="async" data-nimg="fill" class="rounded-lg md:rounded-xl lg:rounded-2xl" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" srcset="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501854140801-50d01698950b%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMnx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=480&amp;q=90 480w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501854140801-50d01698950b%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMnx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=640&amp;q=90 640w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501854140801-50d01698950b%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMnx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=768&amp;q=90 768w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501854140801-50d01698950b%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMnx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1080&amp;q=90 1080w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501854140801-50d01698950b%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMnx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1200&amp;q=90 1200w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501854140801-50d01698950b%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxMnx8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90 1920w"><noscript></noscript></span></div>
                            <div class="absolute w-full bottom-0 left-0 flex flex-col justify-end" style="background-color: rgba(0, 0, 0, 0.8); min-height: 208px;">
                                <div class="flex flex-col text-center items-center p-6 justify-end" style="color: rgb(255, 255, 255);">
                                    <p class="heading-medium mb-4" style="color: currentcolor;">Forest Bathing Retreats</p>
                                    <div class="rich-text-block" style="color: currentcolor;">Reconnect with nature and rejuvenate your mind and body during our immersive forest bathing retreats.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group w-full relative overflow-hidden rounded-lg md:rounded-xl lg:rounded-2xl" style="flex: 0 0 calc(50% - 20px);">
                        <div class="transition-all transition-all ease-in-out duration-500 delay-600 opacity-100 translate-y-0">
                            <div class="flex-shrink-0 relative aspect-w-1 aspect-h-1" style="min-height: 208px;"><span class="relative block" style="height: 208px;"></span><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="photo of pine trees" src="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509316975850-ff9c5deb0cd9%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxN3x8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90" decoding="async" data-nimg="fill" class="rounded-lg md:rounded-xl lg:rounded-2xl" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" srcset="https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509316975850-ff9c5deb0cd9%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxN3x8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=480&amp;q=90 480w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509316975850-ff9c5deb0cd9%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxN3x8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=640&amp;q=90 640w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509316975850-ff9c5deb0cd9%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxN3x8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=768&amp;q=90 768w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509316975850-ff9c5deb0cd9%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxN3x8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1080&amp;q=90 1080w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509316975850-ff9c5deb0cd9%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxN3x8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1200&amp;q=90 1200w, https://deanmccullough.mydurable.com/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509316975850-ff9c5deb0cd9%3Fcrop%3Dentropy%26cs%3Dtinysrgb%26fit%3Dmax%26fm%3Djpg%26ixid%3DM3wyNjI5NjF8MHwxfHNlYXJjaHwxN3x8TmF0dXJlJTIwVGFsa3N8ZW58MHx8fHwxNzAyODE1MTI1fDA%26ixlib%3Drb-4.0.3%26q%3D80%26w%3D1080&amp;w=1920&amp;q=90 1920w"><noscript></noscript></span></div>
                            <div class="absolute w-full bottom-0 left-0 flex flex-col justify-end" style="background-color: rgba(0, 0, 0, 0.8); min-height: 208px;">
                                <div class="flex flex-col text-center items-center p-6 justify-end" style="color: rgb(255, 255, 255);">
                                    <p class="heading-medium mb-4" style="color: currentcolor;">Nature-inspired Art Classes</p>
                                    <div class="rich-text-block" style="color: currentcolor;">Unleash your creativity through nature-inspired art classes led by talented local artists.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="relative">
    <div id="hero-4" class="flex flex-none flex-shrink-0 relative break-word items-center" style="min-height: calc(134px); z-index: 35;">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 z-10" style="background-color: rgb(238, 244, 249);"></div>
        </div>
        <div class="relative z-10 container mx-auto pt-16 lg:pt-32 pb-16 lg:pb-32">
            <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0 flex w-full gap-10 lg:gap-20 flex-col-reverse lg:flex-row-reverse items-center">
                <div class="flex-1 flex flex-col max-w-240 items-center lg:items-start">
                    <div class="rich-text-block" style="color: rgb(17, 24, 39);">
                        <h2 style="white-space:pre-line"><?php the_field('about_title'); ?></h2>
                        <p>
                            <?php the_field('about_text'); ?>
                        </p>
                    </div>
                </div>

                <?php $about_image = get_field('about_image'); ?>
                <?php if ($about_image) : ?>
                    <div class="flex-1 flex w-full h-full justify-center lg:justify-start">
                        <div class="flex-shrink-0 relative w-full mx-auto aspect-w-3 aspect-h-2">
                            <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                <img alt="low angle photography of trees at daytime" src="<?php echo esc_url($about_image['url']); ?>" decoding="async" data-nimg="fill" class="rounded-lg md:rounded-xl lg:rounded-2xl" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw">
                            </span>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<section class="relative">
    <div id="quote-5" class="relative flex flex-none flex-shrink-0 break-word items-center" style="min-height: calc(134px); z-index: 34;">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 z-10" style="background-color: rgb(238, 244, 249);"></div>
        </div>
        <div class="relative z-10 container mx-auto testimonials-carousel pt-8 lg:pt-12 pb-8 lg:pb-12">
            <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0">
                <div class="flex h-full my-auto">
                    <div class="max-w-5xl flex flex-col gap-4 justify-center text-center mx-auto items-center">
                        <h4 class="heading-medium" style="color: rgb(17, 24, 39);"><?php the_field('review_text'); ?></h4>
                        <p class="body-large" style="color: rgb(17, 24, 39);">- <?php the_field('review_author'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="relative">
    <div id="contact-6" class="flex flex-none flex-shrink-0 relative break-word items-center" style="min-height: calc(134px); z-index: 33;">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 z-10" style="background-color: rgb(255, 255, 255);"></div>
        </div>
        <div class="relative z-10 container mx-auto pt-16 lg:pt-32 pb-16 lg:pb-32">
            <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0 flex flex-col w-full gap-10 lg:gap-20 lg:flex-row">
                <div class="w-full lg:w-1/2 lg:mt-10">
                    <div class="rich-text-block" style="color: rgb(17, 24, 39);">
                        <h2>Get in Touch</h2>
                        <p class="pb-2">Reach out to us using the contact form below. We look forward to hearing from you and assisting you with your needs.</p>
                        <?php if ($email) : ?>
                            <a href="mailto:<?= $email ?>" class="group">
                                <i class="fa fa-envelope group-hover:text-gray-400"></i> <?= $email ?>
                            </a>
                        <?php endif ?>
                        <div class="social_icons py-3 flex gap-2">
                            <?php if ($twitter) : ?>
                                <a class="no-underline" href="<?= $twitter ?>" target="_blank">
                                    <i class="fa-brands fa-twitter hover:text-blue-400"></i>
                                </a>
                            <?php endif ?>
                            <?php if ($instagram) : ?>
                                <a class="no-underline" href="<?= $instagram ?>" target="_blank">
                                    <i class="fa-brands fa-instagram hover:text-purple-400"></i>
                                </a>
                            <?php endif ?>
                            <?php if ($facebook) : ?>
                                <a class="no-underline" href="<?= $facebook ?>" target="_blank">
                                    <i class="fa-brands fa-facebook hover:text-blue-700"></i>
                                </a>
                            <?php endif ?>
                            <?php if ($linkedin) : ?>
                                <a class="no-underline" href="<?= $linkedin ?>" target="_blank">
                                    <i class="fa-brands fa-linkedin hover:text-blue-700"></i>
                                </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <?= do_shortcode(get_field('contact_form')); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>