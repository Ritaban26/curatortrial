<?php

/**
 * Title: Hidden Query Loop 2
 * Slug: lifestyle-blog-arcane/hidden-query-loop-2
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|52","bottom":"var:preset|spacing|52"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--52);padding-bottom:var(--wp--preset--spacing--52)"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
  <div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"335px"},"isGridResponsive":true,"gridSMCols":2,"gridLGCols":3,"gridXLCols":3,"gridXXLCols":3} -->
    <!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"stretch"}} -->
    <div class="wp-block-group is-style-default" style="min-height:100%"><!-- wp:group {"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"100%"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-default"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"center","className":"is-style-image-shine","style":{"border":{"radius":"12px"}}} /-->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|24","left":"var:preset|spacing|24"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--24)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
          <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

              <!-- wp:post-title {"isLink":true,"fontSize":"diminutive"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-date {"isLink":true} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|24","left":"var:preset|spacing|24","top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"100%"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
      <div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--24);padding-right:var(--wp--preset--spacing--24);padding-bottom:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--24)"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:separator {"className":"is-style-separator"} -->
          <hr class="wp-block-separator has-alpha-channel-opacity is-style-separator" />
          <!-- /wp:separator -->

          <!-- wp:read-more {"content":"Read More","className":"is-style-read-more"} /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
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
