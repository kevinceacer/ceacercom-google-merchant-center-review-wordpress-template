<?php
/**
 * The main template file.
 *
 * @package shoptimizer
 */

$shoptimizer_layout_archives_sidebar = '';
$shoptimizer_layout_archives_sidebar = shoptimizer_get_option( 'shoptimizer_layout_archives_sidebar' );

$shoptimizer_layout_blog = '';
$shoptimizer_layout_blog = shoptimizer_get_option( 'shoptimizer_layout_blog' );

$shoptimizer_layout_blog_title = '';
$shoptimizer_layout_blog_title = shoptimizer_get_option( 'shoptimizer_layout_blog_title' );

get_header(); ?>

<div id="primary" class="content-area">
    <header class="entry-header title">
        <?php if ( true === $shoptimizer_layout_blog_title ) { 
            single_post_title( '<h1 class="blog-title">', '</h1>' );
        }
        else {
            single_post_title( '<h1 class="blog-title hidden">', '</h1>' );
        } ?>
    </header><!-- .entry-header -->

    <main id="main" class="site-main <?php echo shoptimizer_safe_html( $shoptimizer_layout_blog ); ?>">    

        <!-- 显示产品 -->
        <div id="products-container">
            <?php echo do_shortcode('[products limit="8" columns="4" orderby="rand" order="DESC" visibility="visible"]'); ?>
        </div>

        <!-- 加载更多按钮 -->
        <button id="load-more-products" class="button">加载更多</button>

        <?php
        if ( have_posts() ) : ?>

            <?php get_template_part( 'loop' );

        else :

            get_template_part( 'content', 'none' );

        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php if ( 'no-archives-sidebar' !== $shoptimizer_layout_archives_sidebar ) { ?>
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-posts' ); ?>
    </div><!-- #secondary -->
<?php }

get_footer();