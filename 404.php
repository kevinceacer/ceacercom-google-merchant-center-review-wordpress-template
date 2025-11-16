<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package shoptimizer
 */

if (!defined('ABSPATH')) exit;
get_header(); ?>

<center><div id="h"><div><a href="/"><img src="https://images-na.ssl-images-amazon.com/images/G/01/error/title._TTD_.png" alt="Sorry! We couldn't find that page. Try searching or go to Amazon's home page."></a></div><a href="/" target="_blank"><img id="d" alt="Dogs of Amazon" src="https://images-na.ssl-images-amazon.com/images/G/01/error/28._TTD_.jpg"><script>document.getElementById("d").src="https://images-na.ssl-images-amazon.com/images/G/01/error/"+(Math.floor(Math.random()*200)+1)+"._TTD_.jpg";</script></a></div></center>

<?php get_footer();
