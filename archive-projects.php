<?php get_header(); ?>
<h1>Projects</h1>
<?php if(have_posts()) : ?>
    <div class="projects-list">
    <?php while(have_posts()) : the_post(); ?>
        <div class="project-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </div>
        <?php endwhile; ?>
    </div>
    <?php else : ?>
        <div class="no-projects">
            <p>No projects found.</p>
        </div>
    <?php endif; ?>
<?php get_footer();