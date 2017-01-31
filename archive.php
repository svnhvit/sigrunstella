<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">


						<main id="main" class="m-all t-4of5 d-6of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<h1 id="dates-page-title" itemprop="headline">DATES</h1>

							<div class="dates-flexbox">

							
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php $date_post_classes = array('cf','dates');?>


								<article id="post-<?php the_ID(); ?>" <?php post_class( $date_post_classes ); ?> role="article">

									<header class="entry-header article-header">

										<h3 class="h2 entry-title"><?php the_title(); ?></a></h3>
										
									</header>

									<section class="entry-content cf">

										<?php the_content(); ?>

									</section>


								</article>

								<?php endwhile; ?>

										<?php //bones_page_navi(); ?>

								<?php else : ?>

									<p>No upcoming concerts at the moment.</p>

								<?php endif; ?>

							</div>

						</main>

					<?php //get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
