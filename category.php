<?php get_header(); ?>

<div id="contents" class="inner">
	<div id="contents-in">

		<div id="main">
			<?php if (have_posts()) : ?>
				<section>
					<h2><?php the_category(); ?></h2>
					<?php while (have_posts()) : the_post(); ?>
						<div class="list">
							<?php if (has_post_thumbnail()) : ?>
								<p class="img"><?php the_post_thumbnail(); ?></p>
							<?php else : ?>
								<p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt=""></p>
							<?php endif; ?>
							<div class="text">
								<span class="new">new</span>
								<span class="icon color1">正社員</span>
								<span class="icon color2">アルバイト</span>
								<h4><?php the_title(); ?></h4>
							</div>
							<!--/.text-->
							<?php the_excerpt(); ?>
							<p><a href="<?php the_permalink(); ?>" class="btn">詳細を見る</a></p>
						</div>
						<!--list-->
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<!--/#main-->
		<div id="sub">
			<?php get_template_part('template-parts/loop', 'sub'); ?>
		</div>
		<!--/#sub-->
	</div>
	<!--/#contents-in-->
	<div id="side">
		<?php get_sidebar('categories'); ?>
	</div>
	<!--/#side-->
</div>
<!--/#contents-->
<?php get_footer(); ?>