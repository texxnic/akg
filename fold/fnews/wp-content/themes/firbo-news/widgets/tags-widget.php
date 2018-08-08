<?php  
/**
 * Adds Foo_Widget widget.
 */
class Tags__widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'tags_widget', // Base ID
			esc_html__( 'Популярные тэги', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Показывет популярные тэги', 'text_domain' ), ) // Args
		);
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
		echo '<div class="sidebar whiteWithShadow sidebar__tags"><h5 class="sidebar__news__intro">Популярные тэги:</h5>';
		$tags = '<ul class="tags">';
		foreach(wp_tag_cloud( 'orderby=count&format=array&smallest=14&largest=14&unit=px&number=10' ) as $tag) {
            $tags .= $tag; 
        }
		$tags .= '</ul>'; 
		echo $tags;
		echo '</div>';
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$quantity = ! empty( $instance['quantity'] ) ? $instance['quantity'] : esc_html__( 'Новое количество', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'quantity' ) ); ?>"><?php esc_attr_e( 'Количество тэгов:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'quantity' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'quantity' ) ); ?>" type="number" value="<?php echo esc_attr( $quantity ); ?>">
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
		$instance['quantity'] = ( ! empty( $new_instance['quantity'] ) ) ? sanitize_text_field( $new_instance['quantity'] ) : '';

		return $instance;
	}

} // class Foo_Widget
?>