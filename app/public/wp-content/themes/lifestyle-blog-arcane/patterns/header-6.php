<?php

/**
 * Title: Header with Logo Centered
 * Slug: lifestyle-blog-arcane/header-6
 * Categories: header, lifestyle-blog-arcane-patterns
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"className":"is-style-default","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default"><!-- wp:group {"align":"full","className":"is-style-section-4","style":{"border":{"bottom":{"color":"var:preset|color|secondary-100","width":"1px"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull is-style-section-4" style="border-bottom-color:var(--wp--preset--color--secondary-100);border-bottom-width:1px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group"><!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-sm-aware-1 is-style-social-links-1","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|12"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <ul class="wp-block-social-links has-small-icon-size is-style-sm-aware-1 is-style-social-links-1"><!-- wp:social-link {"url":"#!","service":"facebook","label":""} /-->

          <!-- wp:social-link {"url":"#!","service":"twitter","label":""} /-->

          <!-- wp:social-link {"url":"#!","service":"whatsapp"} /-->
        </ul>
        <!-- /wp:social-links -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|12","right":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--12)"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-size-1"} -->
          <div class="wp-block-button is-style-button-size-1"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Contact', 'lifestyle-blog-arcane'); ?></a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|38","bottom":"var:preset|spacing|38"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull is-style-default" style="padding-top:var(--wp--preset--spacing--38);padding-bottom:var(--wp--preset--spacing--38)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false,"style":{"color":{"duotone":"var:preset|duotone|primary-and-base"}}} /-->

      <!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"tremendous"} /-->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}},"border":{"top":{"color":"var:preset|color|secondary-100","width":"1px"},"bottom":{"color":"var:preset|color|secondary-100","width":"1px"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull is-style-default" style="border-top-color:var(--wp--preset--color--secondary-100);border-top-width:1px;border-bottom-color:var(--wp--preset--color--secondary-100);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide">
      <!-- wp:navigation {"className":"is-style-navigation-basic is-style-navigation-d-medium"} -->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'lifestyle-blog-arcane'); ?>","url":"<?php echo esc_url(home_url('/')); ?>","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Food', 'lifestyle-blog-arcane'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Travel', 'lifestyle-blog-arcane'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Photography', 'lifestyle-blog-arcane'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Beauty', 'lifestyle-blog-arcane'); ?>","url":"#!","kind":"custom"} /-->
      <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
