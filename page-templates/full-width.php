<?php
/*
 * Template Name: Full Width Page
 * Description: Full width page template, it has no sidebars.
 */
get_header(); ?>

<div class="page-title">
    <div class="container">
        <h1 class="pull-left"><?php the_title();?></h1>
    </div>
</div>
<div class="container">
	<div class="row blog-page blog-item">
    	<div class="col-md-12 md-margin-bottom-60">
             <?php
			if ( have_posts() ) : the_post(); ?>
            <div class="blog margin-bottom-40">
            	<?php if ( has_post_thumbnail() && ! post_password_required() ){?>
				  <div class="container">
				     <?php the_post_thumbnail();?>
				  </div>
 				<?php }?>
                <div class="blog-body">
                <?php the_content(); ?>
                <p><?php wp_link_pages( array( 'before' => __( 'Pages:', 'gimliii' ), 'after' => '') ); ?></p>
               </div>
                 </div>
			<?php endif;?>
             <?php
                if ( comments_open() || get_comments_number() ) {
                  comments_template();
                }?>
        </div>
    </div><!--/row-->
</div><!--/container-->

<?php get_footer();?>
