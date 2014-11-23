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
                    <div class="more-btn pull-right">
                        <span>More News</span>
                    </div>
                </div>
                <div class="latest-works-container overflow-hidden">
                    <div class="latest-works-image pull-left">
                    </div>
                    <div class="side-menus pull-left">
                        <div class="side-menu-item wedding-pla">
                            <div class="menu-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/wed-pla.png" />
                            </div>
                            <div class="excerpt">
                                婚礼是盟约的仪式，这是一生一世的永恒盟约，唯有鲜血和死亡能终止的盟约。
                            </div>
                        </div>
                        <div class="side-menu-item wed-coop-hot">
                            <div class="menu-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/coop-hot.png" />
                            </div>
                            <div class="excerpt">
                                以主题的爱情故事带出福音信息，以福音托住美妙圣洁的婚礼。
                            </div>
                        </div>
                        <div class="side-menu-item">
                            <div class="menu-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/wed-tra.png" />
                            </div>
                            <div class="excerpt">
                                结婚是一件容易的事，但要维持一个幸福美满的婚姻却需要双方共同努力。婚前辅导
                                是建立幸福美满家庭的关键因素，它给未来婚者提供一个增进彼此了解，探索两性差异
                                学习沟通与表达技巧的机会，深入了解爱情的真貌与婚姻的实相，协助男女双方为婚姻
                                生活做好妥善的准备。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-case-container">
                <div class="show-case__header overflow-hidden">
                    <div class="show-case-icon pull-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/show-case.png" />
                    </div>
                    <div class="pull-left show-case--chinese">作品展示</div>
                    <div class="pull-right show-case__more-btn-container">
                        <div class="more-btn pull-right">
                            <span>More News</span>
                        </div>
                    </div>
                </div>
                <div class="show-case__body overflow-hidden">
                    <div class="pull-left"></div>
                    <div class="pull-left">
                        <div class="overflow-hidden">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>