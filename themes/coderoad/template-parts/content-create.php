<?php
/**
 * Template part for displaying page content in create.php.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="create-container">
		<?php the_title( '<h1 class="create-title">', '</h1>' ); ?>
		<div class="rectangle-create"></div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="text-below-container">
		<h2><?php the_field('text-below-title'); ?><h2>
		</div>

		<?php if(get_field('steps')): ?>
    <?php while(the_repeater_field('steps')): ?>
		<section class="steps-container">
		<div class="steps-content">
		<h2><?php the_sub_field('title'); ?></h2>
		<h2><?php the_sub_field('sub_title'); ?></h2>
		<p><?php the_sub_field('paragraph'); ?></p>
		<div>
		</section>
    <?php endwhile; ?>
 <?php endif; ?>

 	<div class="tutorial-share-container">
 		<h2 class="tutorial-share-title"><?php the_field('share_title'); ?></h2>
	<div>

 <?php if(get_field('share-content')): ?>
    <?php while(the_repeater_field('share-content')): ?>
	<div class="share-container">
		
	<?php $image = get_sub_field('image'); ?>
	<img src="<?php echo $image['url']; ?>" />
        <h2><?php the_sub_field('title'); ?></h2>
		<p><?php the_sub_field('paragraph'); ?></p>
	</div>
		
    <?php endwhile; ?>
 <?php endif; ?>
 




<?php if( have_rows('created_index') ): ?>

<?php while ( have_rows('created_index') ) : the_row(); ?>
<div class="created-index-container">
	<div class="created-title-container">
	<h2><?php the_sub_field('title'); ?></h2>
	</div>
	  <?php if( have_rows('name_and_videos') ): ?>

			<?php while( have_rows('name_and_videos') ): the_row(); ?>
				<div class="title-index-container">
			   <?php the_sub_field('title'); ?> 
			   <?php the_sub_field('videos_available'); ?>
				</div>
			<?php endwhile; ?>

		  <?php endif; ?>

<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>



		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

