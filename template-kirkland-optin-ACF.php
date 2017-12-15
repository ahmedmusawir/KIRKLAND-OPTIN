<?php
/**
 * The template for displaying Customer Hub Landing Page.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * Template Name: Kirkland Optin Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Omen Optin</title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/template-kirkland-optin.css" />

		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
		<!-- <link rel="stylesheet" type="text/css" href="template-kirkland-optin.css" />	 -->


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

	<section id="HEADER-LOGO">

		<figure class="container">
			<img class="img-responsive" src="<?php the_field('kirk_page_logo'); ?>" alt="">
		</figure>

		<div class="orange-bar"></div>
		
	</section>

	<section id="BLOCK1">
		<figure class="container">
			
			<figure class="col-md-7 col-lg-7">
				<article class="left-pane">
					
				<h1><?php the_field('left_pane_heading'); ?></h1>
				<h4>
					<?php the_field('left_pane_subtext'); ?>
				</h4>

				<?php if( have_rows('kirk_left_pane_list') ): ?>
				 
					<ul class="container-fluid">
				 
				    <?php while( have_rows('kirk_left_pane_list') ): the_row(); ?>
				 
						<li class="row">
							<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
								<!-- <i class="fa fa-check pull-left" aria-hidden="true"></i> -->
								<?php the_sub_field('kirk_icon'); ?>
							</div>
							<div class="col-xs-10 col-sm-11 col-md-11 col-lg-11">
								<!-- Three ways to get only target prospects who are in the buying mode, so you stop wasting 89% of your ad spend on tire kickers. -->
								<?php the_sub_field('kirk_list_item'); ?>
							</div>
						</li>				        
				        
				    <?php endwhile; ?>
				 
				    </ul>
				 
				<?php endif; ?>				

				</article>
			</figure>

			<figure class="col-md-5 col-lg-5">
				<article class="right-pane text-center">
					<figure>

						<img class="img-responsive center-block" src="<?php the_field('kirk_right_image'); ?>" alt="">
						
					</figure>
					<article class="the-form" style="padding-top: 8rem;">

						<?php the_field('kirk_right_form_code'); ?>
						
					</article>
					<p class="secure-text"><i class="fa fa-lock" aria-hidden="true"></i>
 						<?php the_field('kirk_right_disclaimer'); ?>
 					</p>
				</article>
			</figure>

		</figure>
	</section>

	<section id="BLOCK2">
		
		<article class="container">
			
			<h1>
				<?php the_field('kirk_hero_story_heading'); ?>
			</h1>

			<figure class="col-md-9 col-lg-9">
				<aside class="content">
					<img class="img-responsive img-circle pull-left" src="<?php the_field('kirk_hero_story_image'); ?>" alt="">
					<div class="text-content">
						<?php the_field('kirk_hero_story_subtext'); ?>
					</div>
				</aside>
			</figure>
		
		</article>

	</section>


	<footer id="SITE-FOOTER">
		<!-- <nav class="text-center">
			<ul>
				<li><a href="" title="">Support</a></li>
				<li><a href="" title="">Contact</a></li>
			</ul>
		</nav> -->
		<div class="copyright text-center">
			<?php the_field('kirk_page_footer_copyright'); ?>
		</div>
	</footer>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>