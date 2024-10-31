<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       https://widget.my.com
 * @since      1.0.0
 *
 * @package    MyWidgetRecommendations
 * @subpackage MyWidgetRecommendations/includes
 */

/**
 * Register all actions and filters for the plugin.
 *
 * Maintain a list of all hooks that are registered throughout
 * the plugin, and register them with the WordPress API. Call the
 * run function to execute the list of actions and filters.
 *
 * @package    MyWidgetRecommendations
 * @subpackage MyWidgetRecommendations/includes
 * @author     https://widget.my.com <support@widget.my.com>
 */
define("MYWIDGET_RECOMMENDATIONS_BASE_ID", "mywidget-recommendations");
class MyWidgetRecommendationsView extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            MYWIDGET_RECOMMENDATIONS_BASE_ID, // Base ID
            esc_html__( 'myWidget Recommendations' ), // Name
            array( 'description' => esc_html__( 'Widget with personalized recommendations for increasing user metrics.', 'mywidget-recommendations-domain' ), ) // Args
        );
        $this->add_head_script();
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     * @return null
     */
    public function form( $instance ) {
        $cid = ! empty( $instance['cid'] ) ? $instance['cid'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'cid' ) ); ?>"><?php esc_attr_e( 'cid:' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cid' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cid' ) ); ?>" type="text" value="<?php echo esc_attr( $cid ); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['cid'] = ( ! empty( $new_instance['cid'] ) ) ? strip_tags( $new_instance['cid'] ) : '';

        return $instance;
    }


    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <div class="my-widget-anchor" data-cid="<?php echo esc_attr($instance['cid']); ?>"></div>
        <?php
        echo $args['after_widget'];
    }

    private function add_head_script() {
        add_action('wp_head', array( $this, 'head_script'));
    }

    public function head_script() {
        echo '<script id="my-widget-script" async src="https://likemore-go.imgsmail.ru/widget.js"></script>';
    }
}