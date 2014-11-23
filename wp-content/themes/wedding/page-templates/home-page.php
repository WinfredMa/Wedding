<?php
/**
 * Template Name: Home Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php masterslider(2); ?>
            <div class="latest-works overflow-hidden">
                <div class="latest-works__header">
                    <span class="label-item latest-works--chinese">最新作品</span>
                    <span class="label-item latest-works--english">LATESTWORKS</span>
                    <div class="more-btn pull-right more-news">
                        
                    </div>
                </div>
                <div class="latest-works-container overflow-hidden">
                    <div class="latest-works-image pull-left">
                    </div>
                    <div class="side-menus pull-left">
                    </div>
                </div>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>