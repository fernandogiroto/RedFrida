<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit;


class Button_Theme extends Widget_Base
{

    public function get_name()
    {
        return 'Button_Theme';
    }

    public function get_title()
    {
        return 'Button';
    }

    public function get_icon()
    {
        return 'fas fa-plus';
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
            'content_button_text',
            [
                'label' => 'First Button Content',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Fale Conosco'
            ]
        );

        $this->add_control(
            'content_button_link',
            [
                'label' => 'First Button Link',
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'plugin-domain'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>
        <?php
        $target_first = $settings['content_first_button_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow_first = $settings['content_first_button_link']['nofollow'] ? ' rel="nofollow"' : '';
        ?>
        <a class="btn btn-dark shadow py-2 px-3 mr-2 title text-white" href="<?php echo $settings['content_button_link']['url'] . '"' . $target_first . $nofollow_first ?>">
            <i class="far fa-paper-plane pr-1"></i> <?php echo $settings['content_button_text'] ?></a> 
        </a>
    <?php
    }

    protected function _content_template()
    {
    ?>
        <section class="mt-5 pb-5">
            <div class="jumbotron">
                <h1 class="display-4 title"> {{{ settings.title}}}</h1>
                <p class="lead">{{{ settings.sub_title}}}</p>
                <hr class="my-4">
                <p> {{{ settings.content}}}</p>
                <a class="btn btn-color btn-lg" href="#" role="button">{{{settings.button_text}}}</a>
            </div>
        </section>
<?php
    }
}
