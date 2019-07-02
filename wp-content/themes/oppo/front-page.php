<?php 
get_header();
?>
<?php $hero = get_field('hero');?>

<div class="upper text-center">
			<div class="sec1 pt-5 text-center">
				<h1>
					<?php echo $hero['main_title'];?>
				</h1>
				<P class="pt-4 d-inline-block mid">
					<?php echo $hero['small_title'];?>
				</P>
			
				<div class="mt-5 ">
					<a href="<?php echo $hero['link'];?>"> 
						<div class="border d-flex align-items-center justify-content-center rounded-circle circle mr-auto">
							<p>
								<?php echo $hero['link_text'];?>
							</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<?php $main = get_field('main');?>
			<div class="sec2 col-head">
				<h1 class="head">
					<?php echo $main['title'];?>
				</h1>
				<div class="mobile-reno">
					<img src="<?php bloginfo('template_url'); ?>/images/mobile.png">
				</div>
				<p class="main">
					Introducing Oppo Reno India's 1st smartphone wit 10x hybrid zoom. that gives you a closer look at life, minus the blurs.
				</p>
				<div class="footer d-flex">
					<h1>Reno</h1>
					<span class=" border series">series</span>
				</div>
				<div class="mobile">
					<img src="<?php bloginfo('template_url'); ?>/images/back.png">
				</div>
			</div>
			<div class="mix-up">
				<div class="sec3 pt-4">
					<div class="bg-dark">
						<h1>
							ZOOM INTO INDIA WITH OPPO RENO
						</h1>
						<p>
							with photographer Saunak Shah by our side, We set out on a journey of seeing the unseen: a journey of capturing the beauty in details and changing how we look at iconic indian locations.<br>In 10 days, we travelled to 10 popular indian destinations and took a closer look at them with <strong>Oppo Reno's 10x Hybrid Zoom</strong><br> What we discovered left us with new prespectives and a new way to look at beauty.
						</p>
					</div>
				</div>
				<div class="images">
					<div class="man-img">
						<img src="<?php bloginfo('template_url'); ?>/images/man.png">
					</div>
					<div class="city-img">
						<img src="<?php bloginfo('template_url'); ?>/images/city.png">
					</div>
				</div>
				<div class="sec4 pt-4">
					<div class="bg-dark">
						<h1>
							MEET SAUNAK SHAH
						</h1>
						<p>
							In 10 days, we travelled to 10 popular indian destinations and took a closer look at them with Oppo Reno's 10x Hybrid Zoom.<br> What we discovered left us with new prespectives and a new way to look at beauty.
						</p>
						
					</div>
				</div>
				<div class="sec5 my-5">
					<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px;">
					  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
					    style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

<?php
get_footer();
?>