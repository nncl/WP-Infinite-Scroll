<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>
<body>
		<div id="primary" class="site-content">
			<div id="content" role="main">
	<?php
	/*
	 Show only Pages on  infinite scroll!
	Here is the secret:
	    You can set post_type for what you need, it's simple!
	    Some post_types could be: portfolio, project, product
	    We could add as many post types as we want, separating them by commas, like 'post', 'page', 'product'
	*/
	    $args = array(       // set up arguments
	        'post_type' => 'post', // Only Pages
	    );
	    query_posts($args);   // load posts
	    if ( have_posts() ) : ?>
	        <?php /* Start the Loop */ ?>
	            <?php while ( have_posts() ) : the_post(); //the "usual" loop code to display those items ?>
					<article class="">
						<?php the_title(); ?>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>

			<nav id="nav-below" class="navigation" role="navigation">
				<h3 class="assistive-text">Post navigation</h3>
				<div class="nav-previous">
					<a href="http://info.dev/wordpress/?paged=2" >Older posts</a>
				</div>
			</nav><!-- .navigation -->

			<?php else : ?>
			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<?php wp_footer(); ?>
</body>
</html>
