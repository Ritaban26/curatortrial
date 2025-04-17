<?php

/**
 * Register Block Pattern Category
 */

// Hook
add_action('init', 'lifestyle_blog_arcane_block_pattern_category');

// Callback
if (! function_exists('lifestyle_blog_arcane_block_pattern_category')) :
  function lifestyle_blog_arcane_block_pattern_category()
  {

    register_block_pattern_category(
      'lifestyle-blog-arcane-patterns',
      array(
        'label'       => __('Lifestyle Blog Arcane Patterns', 'lifestyle-blog-arcane'),
        'description' => __('Patterns for Lifestyle Blog Arcane', 'lifestyle-blog-arcane'),
      )
    );
  }
endif;

/**
 * Register Block Styles
 */

// Hook
add_action('init', 'lifestyle_blog_arcane_block_styles');

// Callback
if (! function_exists('lifestyle_blog_arcane_block_styles')) :
  function lifestyle_blog_arcane_block_styles()
  {
    // Block: core/image, core/post-featured-image
    // Style: Shine
    // Via: Block Style
    register_block_style(
      ['core/image', 'core/post-featured-image'],
      array(
        'name'  => 'image-shine',
        'label' => __('Shine', 'lifestyle-blog-arcane'),
      )
    );

    // Block: core/image, core/post-featured-image
    // Style: Shine 2
    // Via: Block Style
    register_block_style(
      ['core/image', 'core/post-featured-image'],
      array(
        'name'  => 'image-shine-2',
        'label' => __('Shine 2', 'lifestyle-blog-arcane'),
      )
    );
  }
endif;

/**
 * Enqueue Block Stylesheets.
 */

// Hook
add_action('init', 'lifestyle_blog_arcane_block_stylesheets');

// Callback
if (! function_exists('lifestyle_blog_arcane_block_stylesheets')) :
  function lifestyle_blog_arcane_block_stylesheets()
  {

    // Block: core/button
    $asset = include get_parent_theme_file_path('public/css/button.asset.php');
    wp_enqueue_block_style(
      'core/button',
      array(
        'handle' => 'lifestyle-blog-arcane-button-style',
        'src'    => get_parent_theme_file_uri('public/css/button.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/button.css'),
      )
    );

    // Block: core/columns
    $asset = include get_parent_theme_file_path('public/css/columns.asset.php');
    wp_enqueue_block_style(
      'core/columns',
      array(
        'handle' => 'lifestyle-blog-arcane-columns-style',
        'src'    => get_parent_theme_file_uri('public/css/columns.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/columns.css'),
      )
    );

    // Block: core/cover
    $asset = include get_parent_theme_file_path('public/css/cover.asset.php');
    wp_enqueue_block_style(
      'core/cover',
      array(
        'handle' => 'lifestyle-blog-arcane-cover-style',
        'src'    => get_parent_theme_file_uri('public/css/cover.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/cover.css'),
      )
    );

    // Block: core/group
    $asset = include get_parent_theme_file_path('public/css/group.asset.php');
    wp_enqueue_block_style(
      'core/group',
      array(
        'handle' => 'lifestyle-blog-arcane-group-style',
        'src'    => get_parent_theme_file_uri('public/css/group.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/group.css'),
      )
    );

    // Block: core/image
    $asset = include get_parent_theme_file_path('public/css/image.asset.php');
    wp_enqueue_block_style(
      'core/image',
      array(
        'handle' => 'lifestyle-blog-arcane-image-style',
        'src'    => get_parent_theme_file_uri('public/css/image.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/image.css'),
      )
    );

    // Block: core/navigation
    $asset = include get_parent_theme_file_path('public/css/navigation.asset.php');
    wp_enqueue_block_style(
      'core/navigation',
      array(
        'handle' => 'lifestyle-blog-arcane-navigation-style',
        'src'    => get_parent_theme_file_uri('public/css/navigation.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/navigation.css'),
      )
    );

    // Block: core/paragraph
    $asset = include get_parent_theme_file_path('public/css/paragraph.asset.php');
    wp_enqueue_block_style(
      'core/paragraph',
      array(
        'handle' => 'lifestyle-blog-arcane-paragraph-style',
        'src'    => get_parent_theme_file_uri('public/css/paragraph.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/paragraph.css'),
      )
    );

    // Block: core/post-featured-image
    $asset = include get_parent_theme_file_path('public/css/post-featured-image.asset.php');
    wp_enqueue_block_style(
      'core/post-featured-image',
      array(
        'handle' => 'lifestyle-blog-arcane-post-featured-image-style',
        'src'    => get_parent_theme_file_uri('public/css/post-featured-image.css'),
        'deps'   => $asset['dependencies'],
        'ver'    => $asset['version'],
        'path'   => get_parent_theme_file_path('public/css/post-featured-image.css'),
      )
    );
  }
endif;

/**
 * Load front-end assets.
 */

// Hook
add_action('wp_enqueue_scripts', 'lifestyle_blog_arcane_assets');

// Callback
if (! function_exists('lifestyle_blog_arcane_assets')) :
  function lifestyle_blog_arcane_assets()
  {
    $asset = include get_parent_theme_file_path('public/css/screen.asset.php');

    wp_enqueue_style(
      'lifestyle-blog-arcane-style',
      get_parent_theme_file_uri('public/css/screen.css'),
      $asset['dependencies'],
      $asset['version']
    );
  }
endif;

/**
 * Load back-end assets.
 * enqueue_block_editor_assets: Throw Warning in FSE
 */

// Hook
//add_action('enqueue_block_editor_assets', 'lifestyle_blog_arcane_block_editor_assets');
add_action('enqueue_block_assets', 'lifestyle_blog_arcane_block_editor_assets');

// Callback
if (! function_exists('lifestyle_blog_arcane_block_editor_assets')) :
  function lifestyle_blog_arcane_block_editor_assets()
  {
    $style_asset = include get_parent_theme_file_path('public/css/editor.asset.php');

    wp_enqueue_style(
      'lifestyle-blog-arcane-editor',
      get_parent_theme_file_uri('public/css/editor.css'),
      $style_asset['dependencies'],
      $style_asset['version']
    );
  }
endif;
