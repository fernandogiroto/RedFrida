<?php get_header(); ?>
<section>
    <header>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="title pb-4"><?php echo the_title(); ?></h1>
                </div>
                <div class="col-12 col-md-7">
                    <p><?php the_excerpt() ?></p>
                </div>
            </div>
        </div>
    </header>
</section>
<div class="container mt-5">
    <div class="row">
        <div class="col-9">
            <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="" class="img-fluid mb-5 rounded shadow-lg">
            <h3><?php echo the_title(); ?></h3>
            <div>
                <?php the_content() ?>
            </div>
        </div>
        <div class="col-3">
            <?php dynamic_sidebar('primary-sidebar'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>