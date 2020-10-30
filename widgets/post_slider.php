<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit;


class Post_Slider extends Widget_Base
{

    public function get_name()
    {
        return 'Post_Slider';
    }

    public function get_title()
    {
        return 'Last Post Slider';
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
			'articles_number',
			[
				'label' => __( 'Number of Articles' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10,
				'step' => 1,
				'default' => 3,
			]
        );
        
        $this->add_control(
			'auto_play',
			[
				'label' => __( 'Auto Play' , 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'true',
				'options' => [
                    'true'  => __( 'True', 'plugin-domain'),
                    'false'  => __( 'False'),
				],
				
			]
        );
        
        $this->add_control(
			'dots',
			[
				'label' => __( 'Dots' , 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'true',
				'options' => [
                    'true'  => __( 'True', 'plugin-domain'),
                    'false'  => __( 'False'),
				],
				
			]
		);



        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>
        <div class="carousel" data-flickity='{ "freeScroll": <?php echo $settings['auto_play'] ?>, "contain": true, "prevNextButtons": false, "pageDots": <?php echo $settings['auto_play'] ?> }'>
            <?php
            query_posts( 'posts_per_page=' . $settings['articles_number'] );
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <div class="card card-slider">
                        <div class="card-img-block">
                            <a href="<?php echo the_permalink(); ?>"> <img class="img-fluid" src="<?php echo the_post_thumbnail_url('full'); ?>" alt="Card image cap"></a>
                        </div>
                        <div class="card-body pt-5">
                            <img src="http://localhost:8080/wordpress/wp-content/uploads/2020/10/fernando.jpg" alt="profile-image" class="profile" />
                            <h5 class="card-title"><?php echo the_title(); ?> </h5>
                            <p class="card-text"><?php echo the_content(); ?></p>
                            <a href="<?php echo the_permalink(); ?>" class="btn btn-color">Go somewhere</a>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    <?php
    }

    protected function _content_template()
    {
    ?>
        <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
            <div class="carousel-cell"></div>
        </div>
<?php
    }
}
