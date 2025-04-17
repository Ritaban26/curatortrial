<?php

/**
 * Title: Archive Sidebar
 * Slug: lifestyle-blog-arcane/template-archive-sidebar
 * Template Types: archive
 * Viewport width: 1440
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","theme":"lifestyle-blog-arcane","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|52"}}}} -->
  <div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","layout":{"type":"constrained"}} -->
    <div class="wp-block-column" style="flex-basis:70%">
      <!-- wp:pattern {"slug":"lifestyle-blog-arcane/hidden-archive-title"} /-->
      <!-- wp:pattern {"slug":"lifestyle-blog-arcane/hidden-query-loop-1"} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"30%"} -->
    <div class="wp-block-column" style="flex-basis:30%">
      <!-- wp:template-part {"slug":"sidebar","tagName":"aside","area":"uncategorized","className":"is-style-template-part-h100"} /-->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"lifestyle-blog-arcane","tagName":"footer","area":"footer"} /-->
