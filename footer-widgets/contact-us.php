<?php
// Create the custom widget class
class Contact_Us_Widget extends WP_Widget {

    // Constructor function
    public function __construct() {
        parent::__construct(
            'contact_us_widget', // Base ID
            __( 'Contact Us Widget', 'mann' ), // Name
            array( 'description' => __( 'A custom widget with contact us information.', 'mann' ), ) // Args
        );
    }

    // Widget front-end
    public function widget( $args, $instance ) {
        // Widget output
        echo $args['before_widget'];

        if ( ! empty( $instance['contact_title'] ) ) {
            echo '<h6>' . esc_html( $instance['contact_title']) . '</h6>';
        }
        // Output Address
        if ( ! empty( $instance['contact_description'] ) ) {
            echo '<p>' . esc_html( $instance['contact_description']) . '</p>';
        }
        // Output Phone
        if ( ! empty( $instance['contact_ph_mob'] ) ) {
            echo '<p>' . esc_html( $instance['contact_ph_mob'] ) . '</p>';
        }
        // Output Email
        if ( ! empty( $instance['contact_email'] ) ) {
            echo '<p>' . esc_html( $instance['contact_email'] ) . '</p>';
        }
            echo '<a href="'.esc_url($instance['contact_whatsapp']).'" class="icon-s"><img src="' . get_template_directory_uri() . '/images/footer__social-links-01.svg"></a>';
            echo '<a href="'.esc_url($instance['contact_youtube']).'" class="icon-s"><img src="' . get_template_directory_uri() . '/images/footer__social-links-02.svg"></a>';
            echo '<a href="'.esc_url($instance['contact_google']).'" class="icon-s"><img src="' . get_template_directory_uri() . '/images/footer__social-links-03.svg"></a>';

    
        echo $args['after_widget'];
    }

    // Widget form
    public function form( $instance ) {
        // Widget form fields
        $contact_title = ! empty( $instance['contact_title'] ) ? $instance['contact_title'] : '';
        $contact_ph_mob = ! empty( $instance['contact_ph_mob'] ) ? $instance['contact_ph_mob'] : '';
        $description = ! empty( $instance['contact_description'] ) ? $instance['contact_description'] : '';
        $contact_email = ! empty( $instance['contact_email'] ) ? $instance['contact_email'] : '';
        $contact_whatsapp = ! empty( $instance['contact_whatsapp'] ) ? $instance['contact_whatsapp'] : '#';
        $contact_youtube = ! empty( $instance['contact_youtube'] ) ? $instance['contact_youtube'] : '#';
        $contact_google = ! empty( $instance['contact_google'] ) ? $instance['contact_google'] : '#';
        
        ?>
<p>
    <label for="<?php echo $this->get_field_id( 'contact_title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'contact_title' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_title' ); ?>"
        value="<?php echo esc_attr( $contact_title ); ?>">
</p>
<!-- Description input field -->
<p>
    <label for="<?php echo $this->get_field_id( 'contact_description' ); ?>"><?php _e( 'Description:' ); ?></label>
    <textarea class="widefat" id="<?php echo $this->get_field_id( 'contact_description' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_description' ); ?>"><?php echo esc_attr( $description ); ?></textarea>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'contact_ph_mob' ); ?>"><?php _e( 'Phone/Mobile:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'contact_ph_mob' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_ph_mob' ); ?>"
        value="<?php echo esc_attr( $contact_ph_mob ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'contact_email' ); ?>"><?php _e( 'Email:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'contact_email' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_email' ); ?>"
        value="<?php echo esc_attr( $contact_email ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'contact_whatsapp' ); ?>"><?php _e( 'WhatsApp:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'contact_whatsapp' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_whatsapp' ); ?>"
        value="<?php echo esc_attr( $contact_whatsapp ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'contact_youtube' ); ?>"><?php _e( 'youtube:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'contact_youtube' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_youtube' ); ?>"
        value="<?php echo esc_attr( $contact_youtube ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'contact_google' ); ?>"><?php _e( 'google:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'contact_google' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_google' ); ?>"
        value="<?php echo esc_attr( $contact_google ); ?>">
</p>
<?php
    }

    // Update widget settings
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['contact_title'] = ( ! empty( $new_instance['contact_title'] ) ) ? sanitize_text_field( $new_instance['contact_title'] ) : '';
        $instance['contact_ph_mob'] = ( ! empty( $new_instance['contact_ph_mob'] ) ) ? sanitize_text_field( $new_instance['contact_ph_mob'] ) : '';
        $instance['contact_description'] = ( ! empty( $new_instance['contact_description'] ) ) ? sanitize_text_field( $new_instance['contact_description'] ) : '';
        $instance['contact_email'] = ( ! empty( $new_instance['contact_email'] ) ) ? sanitize_text_field( $new_instance['contact_email'] ) : '';
        $instance['contact_whatsapp'] = ( ! empty( $new_instance['contact_whatsapp'] ) ) ? sanitize_text_field( $new_instance['contact_whatsapp'] ) : '#';
        $instance['contact_youtube'] = ( ! empty( $new_instance['contact_youtube'] ) ) ? sanitize_text_field( $new_instance['contact_youtube'] ) : '#';
        $instance['contact_google'] = ( ! empty( $new_instance['contact_google'] ) ) ? sanitize_text_field( $new_instance['contact_google'] ) : '#';

        return $instance;
    }
}

?>