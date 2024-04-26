<?php
// Create the custom widget class
class Operating_Hour_Widget extends WP_Widget {

    // Constructor function
    public function __construct() {
        parent::__construct(
            'opr_hr_widget', // Base ID
            __( 'Operating Hours Widget', 'mann' ), // Name
            array( 'description' => __( 'A custom widget with operating hour.', 'mann' ), ) // Args
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
        if ( ! empty( $instance['mon_fri'] )  || !empty($instance['mon_fri_tm'])) {
           echo '<p class="days"> '.$instance['mon_fri'].' <span class="time-text">'.$instance['mon_fri_tm'].'</span></p>';
        }
        if ( ! empty( $instance['sat'] )  || !empty($instance['sat_tm'])) {
            echo '<p class="days"> '.$instance['sat'].' <span class="time-text">'.$instance['sat_tm'].'</span></p>';
         }

         if ( ! empty( $instance['sun'] )  || !empty($instance['sun_tm'])) {
            echo '<p class="days"> '.$instance['sun'].' <span class="time-text">'.$instance['sun_tm'].'</span></p>';
         }
        // Output Phone
      
        if ( isset( $instance['app_btn_url'] ) && ! empty( $instance['app_btn_url'] ) ) {
            echo '<a href="' . esc_url( $instance['app_btn_url'] ) . '"><button class="book-a-btn">Book an Appointment</button></a>';
        }
    
        echo $args['after_widget'];
    }

    // Widget form
    public function form( $instance ) {
        // Widget form fields
        $contact_title = ! empty( $instance['contact_title'] ) ? $instance['contact_title'] : '';
         $mon_fri = ! empty( $instance['mon_fri'] ) ? $instance['mon_fri'] : '';
         $mon_fri_tm = ! empty( $instance['mon_fri_tm'] ) ? $instance['mon_fri_tm'] : '';

         $sat = ! empty( $instance['sat'] ) ? $instance['sat'] : '';
         $sat_tm = ! empty( $instance['sat_tm'] ) ? $instance['sat_tm'] : '';

         $sun = ! empty( $instance['sun'] ) ? $instance['sun'] : '';
         $sun_tm = ! empty( $instance['sun_tm'] ) ? $instance['sun_tm'] : '';
         $app_btn_url = ! empty( $instance['app_btn_url'] ) ? $instance['app_btn_url'] : '#';
        
        ?>
<p>
    <label for="<?php echo $this->get_field_id( 'contact_title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'contact_title' ); ?>"
        name="<?php echo $this->get_field_name( 'contact_title' ); ?>"
        value="<?php echo esc_attr( $contact_title ); ?>">
</p>
<!-- Description input field -->
<p>
    <label for="<?php echo $this->get_field_id( 'mon_fri' ); ?>"><?php _e( 'Monday - Friday:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'mon_fri' ); ?>"
        name="<?php echo $this->get_field_name( 'mon_fri' ); ?>"
        value="<?php echo esc_attr( $mon_fri ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'mon_fri_tm' ); ?>"><?php _e( 'Monday - Friday(Time):' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'mon_fri_tm' ); ?>"
        name="<?php echo $this->get_field_name( 'mon_fri_tm' ); ?>"
        value="<?php echo esc_attr( $mon_fri_tm ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'sat' ); ?>"><?php _e( 'Saturday:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'sat' ); ?>"
        name="<?php echo $this->get_field_name( 'sat' ); ?>"
        value="<?php echo esc_attr( $sat ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'sat_tm' ); ?>"><?php _e( 'Saturday(Time):' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'sat_tm' ); ?>"
        name="<?php echo $this->get_field_name( 'sat_tm' ); ?>"
        value="<?php echo esc_attr( $sat_tm ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'sun' ); ?>"><?php _e( 'Sunday:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'sun' ); ?>"
        name="<?php echo $this->get_field_name( 'sun' ); ?>"
        value="<?php echo esc_attr( $sun ); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'sun_tm' ); ?>"><?php _e( 'Sunday(Time):' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'sun_tm' ); ?>"
        name="<?php echo $this->get_field_name( 'sun_tm' ); ?>"
        value="<?php echo esc_attr( $sun_tm ); ?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'app_btn_url' ); ?>"><?php _e( 'Appointment:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'app_btn_url' ); ?>"
        name="<?php echo $this->get_field_name( 'app_btn_url' ); ?>"
        value="<?php echo esc_attr( $app_btn_url ); ?>">
</p>
<?php
    }

    // Update widget settings
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['contact_title'] = ( ! empty( $new_instance['contact_title'] ) ) ? sanitize_text_field( $new_instance['contact_title'] ) : '';
        $instance['mon_fri'] = ( ! empty( $new_instance['mon_fri'] ) ) ? sanitize_text_field( $new_instance['mon_fri'] ) : '';
        $instance['mon_fri_tm'] = ( ! empty( $new_instance['mon_fri_tm'] ) ) ? sanitize_text_field( $new_instance['mon_fri_tm'] ) : '';
        $instance['sat'] = ( ! empty( $new_instance['sat'] ) ) ? sanitize_text_field( $new_instance['sat'] ) : '';
        $instance['sat_tm'] = ( ! empty( $new_instance['sat_tm'] ) ) ? sanitize_text_field( $new_instance['sat_tm'] ) : '';
        $instance['sun'] = ( ! empty( $new_instance['sun'] ) ) ? sanitize_text_field( $new_instance['sun'] ) : '';
        $instance['sun_tm'] = ( ! empty( $new_instance['sun_tm'] ) ) ? sanitize_text_field( $new_instance['sun_tm'] ) : '';
        $instance['app_btn_url'] = ( ! empty( $new_instance['app_btn_url'] ) ) ? sanitize_text_field( $new_instance['app_btn_url'] ) : '#';

        return $instance;
    }
}

?>