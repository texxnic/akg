<?php  
/**
 * Adds Foo_Widget widget.
 */
class social__widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'social_widget', // Base ID
			esc_html__( '!Ссылки на соц. сети', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Ссылки на фб вк тв ок инст ян-зен', 'text_domain' ), ) // Args
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
		echo '<div class="sidebar whiteWithShadow sidebar__links">
<div class="footer__social">
                                        <a href="https://www.facebook.com/groups/176475799834481/" class="social-btn social-facebook" title="Фирбо новости в фейсбуке"><i class="ti-facebook"></i></a>
                                        
                                        <a href="https://vk.com/firbonews" class="social-btn social-vk" title="Фирбо новости во вконтакте"><i class="fab fa-vk"></i></a>

                                        <a href="https://twitter.com/Firbo_News" class="social-btn social-twitter" title="Фирбо новости в твиттере"><i class="fab fa-twitter"></i></a>
                                        
                                        <a href="https://www.ok.ru/group/59004804923434" class="social-btn social-ok" title="Фирбо новости в однокласниках"><i class="fab fa-odnoklassniki"></i></a>

                                        <a href="https://www.instagram.com/firbo_news/" class="social-btn social-instagram" title="Фирбо новости в инстаграме"><i class="fab fa-instagram"></i></a>
                                        
                                        <a href="https://zen.yandex.ru/id/5b0e992c7800193a64d0b410" class="social-btn social-ok" title="Фирбо новости в Яндекс.Дзене"><i class="fab fa-yandex"></i></a>
                                        
 </div>
</div>';
	}



} // class Foo_Widget
?>