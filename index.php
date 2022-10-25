<?php
$articles            = array(
	array(
		'title'      => 'Quick Tip: Create a Very Simple Parallax Effect With CSS & JavaScript',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/parallax-pre.jpg',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/quick-tip-how-to-build-a-dead-simple-parallax-effect-with-css-javascript--cms-33061',
		'categories' => array(
			'CSS',
			'JavaScript',
		),
	),
	array(
		'title'      => 'How to Build a Static Portfolio Page With CSS & JavaScript',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/chart-pre.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/how-to-build-a-portfolio-page-with-css-javascript--cms-32933',
		'categories' => array(
			'CSS',
			'JavaScript',
		),
	),
	array(
		'title'      => 'Dropdown Navigation: How to Maintain the Selected Option On WordPress',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/pre-wp.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/dropdown-navigation-how-to-maintain-the-selected-option-on-page-load-on-a-wordpress-site--cms-32211',
		'categories' => array(
			'JavaScript',
			'WordPress',
		),
	),
	array(
		'title'      => 'Dropdown Navigation: How to Maintain the Selected Option on Page Load',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/load-pre.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/dropdown-navigation-how-to-maintain-the-selected-option-on-page-load--cms-32210',
		'categories' => array(
			'CSS',
			'JavaScript',
		),
	),
	array(
		'title'      => 'Enhance the Way a Web Page Loads With CSS Animations',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/animations-pre.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/quick-tip-how-to-enhance-a-page-with-css-animations--cms-32100',
		'categories' => array(
			'CSS',
		),
	),
	array(
		'title'      => 'How to Build a Full-Screen Responsive Page With Flexbox',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/flex-pre.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/how-to-build-a-full-screen-responsive-page-with-flexbox--cms-32086',
		'categories' => array(
			'CSS',
		),
	),
	array(
		'title'      => 'How to Create an Animated Spirit Day Presentation With fullPage.js',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/spirit-pre.jpg',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/how-to-create-an-animated-spirit-day-presentation-with-fullpagejs--cms-32005',
		'categories' => array(
			'fullPage.js',
		),
	),
	array(
		'title'      => 'Quick Tip: How to Manipulate the Cursor Appearance With CSS',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/cursor-pre.jpg',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/quick-tip-how-to-manipulate-cursor-appearance-with-css--cms-31825',
		'categories' => array(
			'CSS',
			'JavaScript',
		),
	),
	array(
		'title'      => 'How to Build a Full-Screen Responsive Carousel Slider With Owl.js',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/pre-oo.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/how-to-build-a-full-screen-responsive-carousel-slider-with-owljs--cms-31771',
		'categories' => array(
			'jQuery',
			'CSS',
			'Slider',
		),
	),
	array(
		'title'      => 'How to Build an Attractive Responsive Image Gallery With slick.js',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/slick-pre.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/how-to-build-an-attractive-responsive-image-gallery-with-slickjs--cms-31355',
		'categories' => array(
			'jQuery',
			'CSS',
			'Slider',
		),
	),
	array(
		'title'      => 'A Simple JavaScript Technique for Filling Star Ratings',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/stars-pre.png',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/a-simple-javascript-technique-for-filling-star-ratings--cms-29450',
		'categories' => array(
			'CSS',
			'JavaScript',
		),
	),
	array(
		'title'      => 'Quick Tip: Scroll Animations With fullPage.js and Animate.css',
		'image'      => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/scroll-preview.jpg',
		'link'       => 'https://webdesign.tutsplus.com/tutorials/quick-tip-scroll-animations-with-fullpagejs-and-animatecss--cms-25235',
		'categories' => array(
			'jQuery',
			'fullPage.js',
		),
	),
);
$images              = array(
	'banner1.jpg',
	'banner2.jpg',
	'banner3.jpg',
	'banner4.jpg',
	'banner5.jpg',
	'banner6.jpg',
);
$images_keys         = array_keys( $images );
$exclude_images_keys = array();
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>A simple demo showing how to embed random content inside a grid layout</title>
		<link href="main.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php if ( ! empty( $articles ) ) : ?>
				<h1>Some of my <a href="https://tutsplus.com/authors/george-martsoukos" target="_blank">Tuts+ Tutorials</a></h1>
				<ol class="posts">
					<?php
					foreach ( $articles as $key => $article ) :
						if ( 0 !== $key && 0 === $key % 5 ) :
							$in_items         = array_diff( $images_keys, $exclude_images_keys );
							$random_image_key = array_rand( $in_items );
							array_push( $exclude_images_keys, $random_image_key );
							$random_image = $images[ $random_image_key ];
							?>
							<li class="banner">
								<img width="800" height="533" src="img/<?php echo $random_image; ?>" alt="banner">
							</li>
							<?php
						endif;
						?>
						<li class="post">
							<article>
								<figure>
									<a href="<?php echo $article['link']; ?>" target="_blank">
										<img width="300" height="208" src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
									</a>
									<figcaption>
										<ol class="post-categories">
											<?php foreach ( $article['categories'] as $cat ) : ?>
												<li>
													<a href="">
														<?php echo $cat; ?>
													</a>
												</li>
											<?php endforeach; ?>
										</ol>
										<h2 class="post-title">
											<a href="<?php echo $article['link']; ?>" target="_blank">
												<?php echo $article['title']; ?>
											</a>
										</h2>
									</figcaption>
								</figure>
							</article>
						</li>
					<?php endforeach; ?>
				</ol>
			<?php endif; ?>
		</div>

		<footer class="page-footer">
			<span>made by </span>
			<a href="https://georgemartsoukos.com/" target="_blank">
				<img width="24" height="24" src="https://assets.codepen.io/162656/george-martsoukos-small-logo.svg" alt="George Martsoukos logo">
			</a>
		</footer>
	</body>
</html>
