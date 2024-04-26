<?php
// Create the custom widget class
class Logo_Content_Widget extends WP_Widget {

    // Constructor function
    public function __construct() {
        parent::__construct(
            'logo_content_widget', // Base ID
            __( 'Logo Content Widget', 'mann' ), // Name
            array( 'description' => __( 'A custom widget with logo image and description.', 'mann' ), ) // Args
        );
    }

    // Widget front-end
    public function widget( $args, $instance ) {
        // Widget output
        echo $args['before_widget'];
        // Output logo image
        if ( ! empty( $instance['logo_url'] ) ) {
            echo '<img src="' . esc_url( $instance['logo_url'] ) . '" alt="Logo">';
        }
        // Output description
        if ( ! empty( $instance['description'] ) ) {
            echo '<p>' . esc_html( $instance['description'] ) . '</p>';
        }
        echo $args['after_widget'];
    }

    // Widget form
    public function form( $instance ) {
        // Widget form fields
        $logo_url = ! empty( $instance['logo_url'] ) ? $instance['logo_url'] : '';
        $description = ! empty( $instance['description'] ) ? $instance['description'] : '';
        ?>
<!-- Logo image upload field -->
<p>
    <label for="<?php echo $this->get_field_id( 'logo_url' ); ?>"><?php _e( 'Logo Image:' ); ?></label><br>
    <input class="widefat logo-upload" id="footer_log_img" name="<?php echo $this->get_field_name( 'logo_url' ); ?>"
        type="text" value="<?php echo esc_attr( $logo_url ); ?>">
    <input type="button" id="footer-logo" class="button logo-upload-button" value="<?php _e( 'Upload Image' ); ?>" />
</p>

<!-- Description input field -->
<p>
    <label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
    <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>"
        name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo esc_attr( $description ); ?></textarea>
</p>
<?php
    }

    // Update widget settings
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['logo_url'] = ( ! empty( $new_instance['logo_url'] ) ) ? sanitize_text_field( $new_instance['logo_url'] ) : '';
        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? sanitize_text_field( $new_instance['description'] ) : '';
        return $instance;
    }
}

?>