<?php
/**
 * Template Name: Front page
 */
?>

<?php 

$partnerLogos = get_field('partner_logos_logos');
$partnerLogoTitle = get_field('partner_logos_title');
$partnerLogoDescription = get_field('partner_logos_description');
if( !empty($partnerLogos) ):
?>
<div class="section section-agencylogos">
    <div class="container">
        <div class="blockHeader">
            <h2 class="blockHeader_title"><?php echo $partnerLogoTitle; ?></h2>
            <div class="sectionSummary">
                <?php echo $partnerLogoDescription; ?>
            </div>
        </div>
        <div class="inlineGrid inlineGrid-xs-2 inlineGrid-sm-4">
            <?php 
                foreach( $partnerLogos as $logo ):
                    $alt = get_sub_field('alt_text') ? get_sub_field('alt_text') : $logo['logo_upload']['alt'];
                    $title = get_sub_field('title') ? get_sub_field('title') : "";
                    $link = get_sub_field('link') ? get_sub_field('link') : "";
                    echo $link;
            ?>
                <div class="inlineGrid_unit">
                    <?php 
                        if( !empty($link) ):
                            echo '<a href="'.esc_url($link).'" class="logo" target="_blank" rel="noopener noreferrer">';
                        else:
                            echo '<span class="logo">';
                        endif;
                    ?>
                        <img src="<?php echo esc_url($logo['logo_upload']['url']); ?>" <?php if(!empty($title)){echo "title='".$title."'";}?> alt="<?php echo esc_attr($alt); ?>" class="logo_image" />
                    <?php 
                        if( !empty($link) ):
                            echo '</a>';
                        else:
                            echo '</span>';
                        endif;
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- section section-agencylogos -->
<?php
endif;

luca()->getModule('banners')->renderBlock('front-banner0', 'default', ['wrapper' => 'section section-frontBanner0']);

luca()->getModule('banners')->renderBlock('front-banner', 'default', ['wrapper' => 'section section-frontBanner', 'isFirst' => true]); 

luca()->getModule('columns')->renderBlock('front-columns', 'default', ['wrapper' => 'section section-frontColumns', 'container' => true]); 

luca()->getModule('banners')->renderBlock('front-banner2', 'default', ['wrapper' => 'section section-frontBanner2']);


luca()->getModule('logos')->renderBlock('front-logos', 'default', ['wrapper' => 'section section-frontLogos', 'container' => true]);

luca()->getModule('blog')->renderBlock('front-blog', 'default', ['wrapper' => 'section section-frontBlog', 'container' => true]);

luca()->getModule('fixed-price-packages')->renderBlock('front-packages', 'default', ['wrapper' => 'section section-frontPackages', 'container' => true]);

luca()->getModule('testimonials')->renderBlock('front-testimonials', 'default', ['wrapper' => 'section section-frontTestimonials', 'container' => true]);

luca()->getModule('textarea')->renderBlock('front-textarea', 'default', ['wrapper' => 'section section-frontTextarea', 'container' => true]);

//luca()->getModule('blog')->renderBlock('blog-front', 'default', ['wrapper' => 'section', 'container' => true]);
//luca()->getModule('social')->renderBlock('social-front', 'default', ['wrapper' => 'section', 'container' => true]);

?>