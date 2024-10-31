<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://widget.my.com
 * @since      1.0.0
 *
 * @package    MyWidgetRecommendations
 * @subpackage MyWidgetRecommendations/admin/partials
 */


?>

<div class="wrap">
    <br />
    <img src='<?php echo $this->get_image_url().'mycom_widget.png' ?>' style='width:200px;'/>
    <hr>
    <br />
    <p>
        <?php echo sprintf(
            wp_kses( __( 'To placed the widget at your site go to «Appearance» to «Widgets». After that click on the myWidget widget, select the type of widget and click on the button «Add widget». You will be offered to enter the cid of widget, to get it you should to go to <a target="_blank" href="%s">Widget.my.com</a>, to log in and select the type of widget, after that go to «Settings» and click on the button «View code».', 'mywidget-recommendations-domain' ),
                array(  'a' => array( 'href' => array() ) ) ), esc_url( 'https://widget.my.com' )
        ); ?>
    </p>
    <p>
        <?php echo sprintf(
            wp_kses( __( 'If you don’t have user account in myWidget platform you should to sign in to the <a target="_blank" href="%s">system</a>.', 'mywidget-recommendations-domain' ),
                array(  'a' => array( 'href' => array() ) ) ), esc_url( 'https://widget.my.com' )
        ); ?>
    </p>
</div>