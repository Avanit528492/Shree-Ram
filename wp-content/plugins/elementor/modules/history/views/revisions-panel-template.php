<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<script type="text/template" id="tmpl-elementor-panel-revisions">
	<div class="elementor-panel-box">
	<div class="elementor-panel-scheme-buttons">
			<div class="elementor-panel-scheme-button-wrapper elementor-panel-scheme-discard">
				<button class="elementor-button" disabled>
					<i class="eicon-close" aria-hidden="true"></i>
					<?php echo esc_html__( 'Discard', 'elementor' ); ?>
				</button>
			</div>
			<div class="elementor-panel-scheme-button-wrapper elementor-panel-scheme-save">
				<button class="elementor-button elementor-button-success" disabled>
					<?php echo esc_html__( 'Apply', 'elementor' ); ?>
				</button>
			</div>
		</div>
	</div>

	<div class="elementor-panel-box">
		<div class="elementor-panel-heading">
			<div class="elementor-panel-heading-title"><?php echo esc_html__( 'Revisions', 'elementor' ); ?></div>
		</div>
		<div id="elementor-revisions-list" class="elementor-panel-box-content"></div>
	</div>
</script>

<script type="text/template" id="tmpl-elementor-panel-revisions-no-revisions">
	<#
	var no_revisions_1 = '<?php echo esc_html__( 'Revision history lets you save your previous versions of your work, and restore them any time.', 'elementor' ); ?>',
		no_revisions_2 = '<?php echo esc_html__( 'Start designing your page and you will be able to see the entire revision history here.', 'elementor' ); ?>',
		revisions_disabled_1 = '<?php echo esc_html__( 'It looks like the post revision feature is unavailable in your website.', 'elementor' ); ?>',
		revisions_disabled_2 = '<?php printf( esc_html__( 'Learn more about <a target="_blank" href="%s">WordPress revisions</a>', 'elementor' ), 'https://go.elementor.com/wordpress-revisions/' ); /* translators: %s: Codex URL */ ?>';
	#>
	<img class="elementor-nerd-box-icon" src="<?php
	// PHPCS - Safe Elementor SVG
	echo ELEMENTOR_ASSETS_URL . 'images/information.svg' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" />
	<div class="elementor-nerd-box-title"><?php echo esc_html__( 'No Revisions Saved Yet', 'elementor' ); ?></div>
	<div class="elementor-nerd-box-message">{{{ elementor.config.document.revisions.enabled ? no_revisions_1 : revisions_disabled_1 }}}</div>
	<div class="elementor-nerd-box-message">{{{ elementor.config.document.revisions.enabled ? no_revisions_2 : revisions_disabled_2 }}}</div>
</script>

<script type="text/template" id="tmpl-elementor-panel-revisions-loading">
	<i class="eicon-loading eicon-animation-spin" aria-hidden="true"></i>
</script>

<script type="text/template" id="tmpl-elementor-panel-revisions-revision-item">
	<div class="elementor-revision-item__wrapper {{ type }}">
		<div class="elementor-revision-item__gravatar">{{{ gravatar }}}</div>
		<div class="elementor-revision-item__details">
			<div class="elementor-revision-date" title="{{{ new Date( timestamp * 1000 ) }}}">{{{ date }}}</div>
			<div class="elementor-revision-meta">
				<span>{{{ typeLabel }}}</span>
				<?php echo esc_html__( 'By', 'elementor' ); ?> {{{ author }}}
				<span>(#{{{ id }}})</span>&nbsp;
			</div>
		</div>
		<div class="elementor-revision-item__tools">
			<# if ( 'current' === type ) { #>
				<i class="elementor-revision-item__tools-current eicon-star" aria-hidden="true"></i>
				<span class="elementor-screen-only"><?php echo esc_html__( 'Current', 'elementor' ); ?></span>
			<# } #>

			<i class="elementor-revision-item__tools-spinner eicon-loading eicon-animation-spin" aria-hidden="true"></i>
		</div>
	</div>
</script>
