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
<section>
    <div class="container mt-5 pb-3">
        <div class="row">
            <div class="col-12  pt-0 pt-md-5">
                <div class="div">
                    <?php the_content(); ?>
                </div>


            </div>
        </div>
</section>

<?php get_footer(); ?>