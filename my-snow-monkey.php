<?php
/**
 * Plugin name: My Snow Monkey
 * Description: このプラグインに、あなたの Snow Monkey 用カスタマイズコードを書いてください。
 * Version: 0.2.5
 * Update URI: https://snow-monkey.2inc.org
 *
 * @package my-snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Snow Monkey 以外のテーマを利用している場合は有効化してもカスタマイズが反映されないようにする
 */
$theme = wp_get_theme( get_template() );
if ( 'snow-monkey' !== $theme->template && 'snow-monkey/resources' !== $theme->template ) {
	return;
}

/**
 * Directory url of this plugin
 *
 * @var string
 */
define( 'MY_SNOW_MONKEY_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * Directory path of this plugin
 *
 * @var string
 */
define( 'MY_SNOW_MONKEY_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * Display message in console.log if this plugin is enabled.
 */
add_action(
	'wp_footer',
	function () {
		if ( is_user_logged_in() ) :
			?>
			<script>console.log( 'My Snow Monkey plugin is active' );</script>
			<?php
		endif;
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'my-snow-monkey',
			MY_SNOW_MONKEY_URL . '/dist/style.css',
			array( Framework\Helper::get_main_style_handle() ),
			filemtime( MY_SNOW_MONKEY_PATH . '/dist/style.css' )
		);
	}
);

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'editor-styles' );
		add_editor_style( '/../../plugins/my-snow-monkey/dist/style.css' );
	}
);
