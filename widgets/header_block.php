<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; 


class Header_Block extends Widget_Base
{

  public function get_name()
  {
    return 'Header_block';
  }

  public function get_title()
  {
    return 'Header_block';
  }

  public function get_icon()
  {
    return 'far fa-window-restore';
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
      'label_heading',
      [
        'label' => 'Title Heading',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'My Example Heading'
      ]
    );

    $this->add_control(
      'content',
      [
        'label' => 'Content Heading',
        'type' => \Elementor\Controls_Manager::WYSIWYG,
        'default' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.'
      ]
    );

    $this->add_control(
      'content_image',
      [
        'label' => 'Content Image',
        'type' => \Elementor\Controls_Manager::MEDIA,
        'url' => \Elementor\Utils::get_placeholder_image_src(),
      ]
    );


    $this->add_control(
      'content_first_button_text',
      [
        'label' => 'First Button Content',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Fale Conosco'
      ]
    );

    $this->add_control(
      'content_first_button_link',
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

    $this->add_control(
      'content_second_button_text',
      [
        'label' => 'First Button Content',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Ver Portfólio'
      ]
    );

    $this->add_control(
      'content_second_button_link',
      [
        'label' => 'Second Button Link',
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
    <section>
      <header>
        <div class="container pt-2 pt-md-5 pb-2 mb-5">
          <div class="row pb-5">
            <div class="col-12 col-md-5">
              <h1 class="title pb-4 pt-5"><?php echo $settings['label_heading'] ?></h1>
              <?php echo $settings['content'] ?>
              <div class="mt-5 mb-5 mb-md-0">
                <?php
                $target_first = $settings['content_first_button_link']['is_external'] ? ' target="_blank"' : '';
                $nofollow_first = $settings['content_first_button_link']['nofollow'] ? ' rel="nofollow"' : '';
                $target_second = $settings['content_second_button_link']['is_external'] ? ' target="_blank"' : '';
                $nofollow_second = $settings['content_second_button_link']['nofollow'] ? ' rel="nofollow"' : '';
                ?>
                <a class="btn btn-dark shadow py-2 px-3 mr-2 title text-white" href="<?php echo $settings['content_first_button_link']['url'] . '"' . $target_first . $nofollow_first ?>"><i class="far fa-paper-plane pr-1"></i>
                  <?php echo $settings['content_first_button_text'] ?></a>
                <a class="btn btn-outline-danger shadow-sm py-2 px-3 title" href="<?php echo $settings['content_second_button_link']['url'] . '"' . $target_second . $nofollow_second ?>"><i class="fab fa-codepen pr-1"></i>
                  <?php echo $settings['content_second_button_text'] ?>
                </a>
              </div>
            </div>
            <div class="d-none d-md-block col-7"><img class="img-fluid" src="<?php echo $settings['content_image']['url'] ?>" alt="" /></div>
          </div>
        </div>
      </header>
    </section>
  <?php
  }

  protected function _content_template()
  {
  ?>
    <section>
      <header>
        <div class="container pt-5 pb-2 mb-5">
          <div class="row pb-5">
            <div class="col-5">
              <h1 class="title pb-4 pt-5">{{{ settings.label_heading }}}</h1>
              {{{ settings.content }}}
              <div class="mt-5">
                <a class="btn btn-dark shadow py-2 px-3 title mr-2 text-white" href="#"><i class="far fa-paper-plane pr-1"></i>{{{ settings.content_first_button_text }}}</a>
                <a class="btn btn-outline-danger shadow-sm py-2 px-3 title" href="#"><i class="fab fa-codepen pr-1">{{{ settings.content_second_button_text }}}</i></a>
              </div>
            </div>
            <div class="col-7"><img class="img-fluid" src="{{{ settings.content_image.url }}}" alt="" /></div>
          </div>
        </div>
      </header>
    </section>
<?php
  }
}
