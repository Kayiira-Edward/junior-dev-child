<?php get_header(); ?>
<?php if(have_posts()) : the_post(); ?>
<article class="project-single">
    <h1><?php the_title(); ?></h1>
    <div class="project-content">
        <?php the_content(); ?>
    </div>
    <div class="project-meta">
        <p><strong>Project Date:</strong> <?php echo get_post_meta(get_the_ID(), 'project_date', true); ?></p>
        <p><strong>Project URL:</strong> <a href="<?php echo get_post_meta(get_the_ID(), 'project_url', true); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'project_url', true); ?></a></p>
        <p><strong>Project Categories:</strong> <?php echo get_the_term_list(get_the_ID(), 'project_category', '', ', '); ?></p>
    </div>
    <div class="project-content">
        <?php the_content(); ?>
        </div>`
    <div class="project-navigation">
        <div class="nav-previous"><?php previous_post_link('%link', 'Previous Project'); ?></div>
        < class="nav-next"><?php next_post_link('%link', 'Next Project'); ?>
    </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>