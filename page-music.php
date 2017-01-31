<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-4of5 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php $music_page_post_classes = array('cf','music');?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( $music_page_post_classes ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> 

								<section class="entry-content cf">

									<?php the_content(); ?>

								</section>

								<footer>
									<a href="https://open.spotify.com/artist/6vYvhhzuIQYgfLfYdq5nI6" target="_blank"><img class="music-link" src="http://localhost/sigrunstella/wp-content/uploads/sites/2/2016/09/spotify-icon.png"></a>
									<a href="https://itunes.apple.com/ca/album/kings-park-single/id1140363849" target="_blank">
									<img class="music-link" src="http://localhost/sigrunstella/wp-content/uploads/sites/2/2016/09/itunes-icon.png"></a>
								</footer>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php // get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
