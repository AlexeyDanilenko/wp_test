<?php 
/*
Template Name: Главная страница
Template Post Type: page
*/
 ?>

<?php get_header(); ?>
			<?php if(is_front_page()) {?>
			<?php query_posts('showposts=3&post_type=anons'); ?>
			<div class="main_slider rounded">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				  	<?php if (have_posts() ) : while (have_posts() ) : the_post(); $i++; ?>
				  	<?php if ($i==1) {?>
				    <div class="carousel-item active">
				    <?php } else { ?>
				    <div class="carousel-item">
				    <?php } ?>
						  <?php if (has_post_thumbnail() ) {
						  	$url = wp_get_attachment_url( get_post_thumbnail_id() );
						  ?>
				      <img class="rounded-right col-lg-8 col-md-6 col-sm-4 col-sx-2" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
				      <?php } ?>
				      <div class="caption col-lg-4 col-md-6 col-sm-8 col-xs-10">
						    <p><?php the_title(); ?></p>
						    <div class="cap_date">
					      	<?php the_date( 'j F Y' ); ?>
						    </div>
						    <div class="cap_btn">
						    	<a href="<?php the_permalink(); ?>">Новости</a>
						    </div>
						  </div>

					  </div><!-- carousel-item -->
					<?php endwhile; endif; ?>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
					</div><!-- /.carousel-inner-->
				</div><!-- /.carousel -->
			</div><!-- /.main_slider -->
			<?php } wp_reset_query(); ?>
			<div style="clear: both;"></div>
			<div class="row1">
			<?php get_sidebar(); ?>
			<!-- /.sidebar -->
			<div class="content col-md-8 col-sm-12">
				<h3>Новости</h3>
				<?php
				$id=1; // ID заданной рубрики
				$n=3;   // количество выводимых записей
				$recent = new WP_Query("cat=$id&showposts=$n");
				while($recent->have_posts()) : $recent->the_post();
				?>
				<div class="post">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( $size, $attr ); ?></a>
				<div class="post_date"><?php the_date( 'j F Y' ); ?></div>
				<div class="exerpt"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
				</div>
				<?php endwhile; ?>

			</div><!-- /.content -->
			</div><!-- /.row1 -->
		</div><!-- /.container -->

<?php get_footer(); ?>
