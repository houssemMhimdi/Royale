			<div class="paca-carousel-wrap" style="display:none;">
				<div class="paca-carousel-items paca-slider-carousel" data-slick='{"dots":true,"slidesToShow": 4, "slidesToScroll": 4,"responsive":[{ "breakpoint": 400, "settings": { "slidesToShow": 1, "slidesToScroll": 1 } }]}'>
					<?php $i=1; while($i <= 20){?>

							<article class="col-xs-12 paca-standard-grid">

								<header>
									<div class="figure-wrapper <?php echo ($i==1 ? 'overlay-arrows':''); ?>">
										<figure>
											<div class="overlay-date">
												<span class="month">JAN</span>
												<span class="day">10</span>
											</div>
											<ul class="grids-item-slider">
												<li><img src="<?php echo get_template_directory_uri() ?>/assets/img/large-3.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" /></li>
												<li><img src="<?php echo get_template_directory_uri() ?>/assets/img/large-3.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" /></li>
												<li><img src="<?php echo get_template_directory_uri() ?>/assets/img/large-3.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" /></li>
												<li><img src="<?php echo get_template_directory_uri() ?>/assets/img/large-3.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" /></li>
											</ul>
											<a href="#" class="post-link" title="title here" alt="alt-here"></a>
											<figcaption>
												<div class="post-info post-info-centre">
													<i class="icon fa fa-arrow-right fa-2x" aria-hidden="true"></i>
												</div>
											</figcaption>
										</figure>
									</div>
								</header>






								<footer>
									
									<h4 class="item-title"><a href="#" title="title here" alt="alt here">Title goes here</a></h4>
									<div class="post-meta">
										<span class="author">By <a href="#">Jason Van Hil</a></span> /
										<span class="posted">
											<span class="date">1 min ago</span>
											<time datetime="2016-06-06" itemprop="datePublished" class="hidden">06 June 2016</time>
										</span> /
										<span class="comments">20 comments</span>
									</div>

								</footer>



							</article>



					<?php $i++;} ?>
				</div>
			</div>