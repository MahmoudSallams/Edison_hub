<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;

$atts = shortcode_atts( array(
	'class'    => '',
	'css'      => '',
	
	'name'     => '',
	'company'  => '',
	'subtitle' => '',
	'link'     => '',
	'image'    => ''
), $atts );

$testimonial_image = '';
$author_info = array();

$class = array( 'testimonial', $atts['class'] );

if ( ! empty( $atts['image'] ) ) {
	if ( is_numeric( $atts['image'] ) ) {
		$image_src = wp_get_attachment_image_src( $atts['image'], 'full' );
		$atts['image'] = array_shift( $image_src );
	}

	$class[] = 'has-image';
	$testimonial_image = sprintf( '
		<div class="testimonial-image">
			<img src="%s" alt="%s" />
		</div>
	', esc_attr( $atts['image'] ), esc_attr( $atts['name'] ) );
}

if ( ! empty( $atts['subtitle'] ) )
	$author_info[] = sprintf( '<span class="subtitle">%s</span>', wp_kses_post( $atts['subtitle'] ) );

if ( ! empty( $atts['company'] ) ) {
	if ( ! empty( $atts['link'] ) )
		$author_info[] = sprintf( '<a href="%s" class="company">%s</a>', esc_url( $atts['link'] ), esc_html( $atts['company'] ) );
	else
		$author_info[] = sprintf( '<span class="company">%s</span>', esc_html( $atts['company'] ) );
}

?>

	<div class="<?php echo esc_attr( implode( ' ', $class ) ) ?>">
		<?php echo wp_kses_post( $testimonial_image ) ?>
		
		<div class="testimonial-content">
			<div class="testimonial-meta">
				<div class="testimonial-author">
					<strong class="author-name"><?php echo esc_html( $atts['name'] ) ?></strong>
					<div class="author-info"><?php echo implode( ' <span class="divider">-</span> ', $author_info ) ?></div>
				</div>
			</div>
			<blockquote>
				<?php echo wp_kses_post( $content ) ?>
			</blockquote>
		</div>
	</div>
