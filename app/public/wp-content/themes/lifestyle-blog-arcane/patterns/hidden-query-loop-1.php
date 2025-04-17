<?php

/**
 * Title: Hidden Query Loop 1
 * Slug: lifestyle-blog-arcane/hidden-query-loop-1
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|52","bottom":"var:preset|spacing|52"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignwide is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--52);padding-bottom:var(--wp--preset--spacing--52)"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
  <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|48"}},"layout":{"type":"default","columnCount":"1","minimumColumnWidth":null}} -->
    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/3.5","align":"center","className":"is-style-image-shine-2","style":{"border":{"radius":"12px"}}} /--></div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|32","left":"var:preset|spacing|32"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
          <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:post-terms {"term":"category","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

              <!-- wp:post-title {"textAlign":"center","isLink":true,"fontSize":"medium"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-date {"textAlign":"center","isLink":true} /-->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
          <div class="wp-block-group"><!-- wp:separator {"className":"is-style-separator"} -->
            <hr class="wp-block-separator has-alpha-channel-opacity is-style-separator" />
            <!-- /wp:separator -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|16","left":"var:preset|spacing|16"}}},"layout":{"type":"constrained"}} -->
          <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:post-excerpt {"textAlign":"center","showMoreOnNewLine":false,"excerptLength":15} /-->

            <!-- wp:read-more {"content":"Read More","className":"is-style-read-more"} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"paginationArrow":"arrow","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous {"label":"Prev"} /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next {"label":"Next"} /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('No posts were found.', 'lifestyle-blog-arcane'); ?></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
  </div>
  <!-- /wp:query -->
</section>
<!-- /wp:group -->
