			<?php $i=0; while($i <= 20){ ?>	

				<article class="col-sm-<?php echo $i==1 ? 8 : 4  ?> paca-standard-grid boxed bordered masonry-grid-item">

					<header>
						<div class="figure-wrapper overlay-animation">
							<figure class="icon-lightgallery" aria-hidden="true" data-src="<?php echo get_template_directory_uri() ?>/assets/img/small-<?php echo rand(3,4) ?>.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/small-<?php echo rand(3,4) ?>.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" />
								<a href="#" class="post-link" title="title here" alt="alt-here"></a>
								<figcaption>
									<div class="post-info post-info-centre">
										<i class="icon fa fa-plus fa-2x"></i>
									</div>
								</figcaption>
							</figure>
						</div>
					</header>

				</article>


			<?php $i++; } ?>