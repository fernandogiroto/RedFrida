<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit;


class Jumbotron extends Widget_Base
{

  public function get_name()
  {
    return 'Jumbotron';
  }

  public function get_title()
  {
    return 'Jumbotron';
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

    $this->add_control(
      'sub_title',
      [
        'label' => 'Sub Title Heading',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
      ]
    );

    $this->add_control(
      'content',
      [
        'label' => 'Content',
        'type' => \Elementor\Controls_Manager::WYSIWYG,
        'default' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.'
      ]
    );

    $this->add_control(
      'button_text',
      [
        'label' => 'Button Content',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'Fale Conosco'
      ]
    );

    $this->add_control(
      'button_link',
      [
        'label' => 'Button Link',
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
    <section class="mt-5 pb-5">
        <div class="jumbotron">
          <h1 class="display-4 title"><?php echo $settings['title'] ?></h1>
          <p class="lead"><?php echo $settings['sub_title'] ?></p>
          <hr class="my-4">
          <p><?php echo $settings['content'] ?></p>
          <a class="btn btn-color btn-lg" href="<?php echo $settings['button_link']['url'] ?>" role="button"><?php echo $settings['button_text'] ?></a>
        </div>
      </div>
    </section>
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
