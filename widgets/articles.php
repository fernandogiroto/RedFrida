<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit;


class Articles_Blog extends Widget_Base
{

    public function get_name()
    {
        return 'Articles_Blog';
    }

    public function get_title()
    {
        return 'Articles Blog';
    }

    public function get_icon()
    {
        return 'fas fa-square';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Settings',
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => 'Title Heading',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Título #03'
            ]
        );

        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>

        <?php
        query_posts('posts_per_page=' . $settings['articles_number']);
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <div class="card mb-5">
                    <a href="<?php echo the_permalink(); ?>"> <img class="card-img-top" src="<?php echo the_post_thumbnail_url('full'); ?>" style="height:450px" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo the_title(); ?> </h5>
                        <p class="card-text"><?php echo the_content(); ?></p>
                        <a type="button" href="<?php echo the_permalink(); ?>" class="btn btn-dark text-white"> Ler Mais </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo get_the_date( 'j/F, Y' ); ?></small>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
    <?php
    }

    protected function _content_template()
    {
    ?>
<?php
        query_posts('posts_per_page=5');
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <div class="card mb-5">
                    <a href="<?php echo the_permalink(); ?>"> <img class="card-img-top" src="<?php echo the_post_thumbnail_url('full'); ?>" style="height:450px" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo the_title(); ?> </h5>
                        <p class="card-text"><?php echo the_content(); ?></p>
                        <a type="button" href="<?php echo the_permalink(); ?>" class="btn btn-dark text-white"> Ler Mais </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo get_the_date( 'j/F, Y' ); ?></small>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
<?php
    }
}
