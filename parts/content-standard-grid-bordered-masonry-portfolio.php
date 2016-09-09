			<?php $i=0; while($i <= 20){ ?>	

				<article class="portfolio-three-col paca-standard-grid boxed bordered masonry-grid-item paca-portfolio">

					<header>
						<div class="figure-wrapper overlay-animation">
							<figure class="icon-lightgallery" aria-hidden="true" data-src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio-<?php echo rand(1,9) ?>.jpg">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio-<?php echo rand(1,9) ?>.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" />
								<figcaption>
									<div class="post-info post-info-centre">
										<div>
											<a href="">
												<h5>Lorem ipsum dolor sit amit verdo ipsum dolor sit amit verdo</h5>
												<p>lorem ipsum dolor sit amit verdo ipsum dolor sit amit verdo sit amit verdo ipsum dolor sit amit verdo sit amit verdo ipsum dolor sit amit verdo sit amit verdo ipsum dolor sit amit verdo </p>
											</a>
										</div>
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

						<content class="item-contents">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum…</p>
						</content>
						
					</footer>
				</article>


			<?php $i++; } ?>