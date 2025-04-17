<?php

/**
 * Title: Hidden Sidebar
 * Slug: lifestyle-blog-arcane/hidden-sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sidebar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|52","bottom":"var:preset|spacing|52"},"blockGap":"var:preset|spacing|36"},"position":{"type":""},"dimensions":{"minHeight":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--52);padding-bottom:var(--wp--preset--spacing--52)"><!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"border":{"radius":"12px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide is-style-default" style="border-radius:12px"><!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-basic is-style-text-cue"} -->
        <h3 class="wp-block-heading is-style-heading-basic is-style-text-cue"><?php esc_html_e('Popular Posts', 'lifestyle-blog-arcane'); ?></h3>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
      <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":null,"minimumColumnWidth":"10rem"}} -->
        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
          <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"aspectRatio":"4/3.5","style":{"border":{"radius":"12px"}}} /--></div>
          <!-- /wp:column -->

          <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
          <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"tiny"} /-->

              <!-- wp:post-date {"format":"M j, Y","isLink":true,"fontSize":"minute"} /-->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"border":{"radius":"12px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide is-style-default" style="border-radius:12px"><!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-basic is-style-text-cue"} -->
        <h3 class="wp-block-heading is-style-heading-basic is-style-text-cue"><?php esc_html_e('Tags', 'lifestyle-blog-arcane'); ?></h3>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:tag-cloud {"numberOfTags":10,"className":"is-style-outline"} /-->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"border":{"radius":"12px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide is-style-default" style="border-radius:12px"><!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-basic is-style-text-cue"} -->
        <h3 class="wp-block-heading is-style-heading-basic is-style-text-cue"><?php esc_html_e('About', 'lifestyle-blog-arcane'); ?></h3>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group" style="line-height:1"><!-- wp:group {"className":"is-style-section-3","style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-section-3" style="border-radius:50%;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
          <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/avatar-lite.webp" alt="" class="" style="aspect-ratio:1;object-fit:cover;width:60px" /></figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-summary","style":{"typography":{"lineHeight":"1.2"}}} -->
          <p class="is-style-text-summary" style="line-height:1.2"><?php esc_html_e('Emma Hayes', 'lifestyle-blog-arcane'); ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-text-note","style":{"typography":{"lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-800"}}}},"textColor":"secondary-800"} -->
          <p class="is-style-text-aware-1 is-style-text-note has-secondary-800-color has-text-color has-link-color" style="line-height:1"><?php esc_html_e('Lifestyle Expert', 'lifestyle-blog-arcane'); ?></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-text-note","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-800"}}}},"textColor":"secondary-800"} -->
        <p class="is-style-text-aware-1 is-style-text-note has-secondary-800-color has-text-color has-link-color"><?php esc_html_e('Emma brings a fresh take on modern living, covering mindful habits, chic fashion, and travel adventures with a personal touch.', 'lifestyle-blog-arcane'); ?></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:social-links {"iconColor":"secondary-800","iconColorValue":"#3f4666","size":"has-small-icon-size","className":"is-style-sm-aware-1 is-style-social-links-1"} -->
        <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-sm-aware-1 is-style-social-links-1"><!-- wp:social-link {"url":"#!","service":"x"} /-->

          <!-- wp:social-link {"url":"#!","service":"linkedin"} /-->

          <!-- wp:social-link {"url":"#!","service":"instagram"} /-->
        </ul>
        <!-- /wp:social-links -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
