<?php
/**
 * A WP_Image_Editor mock that doesn't support WebP.
 *
 * @package performance-lab
 * @since 1.0.0
 */

/**
 * Class WP_Image_Doesnt_Support_WebP mocks a WP_Image_Editor that doesn't support WebP.
 *
 * @since 1.0.0
 */
class WP_Image_Doesnt_Support_WebP extends WP_Image_Editor_Imagick {
	/**
	 * Checks to see if editor supports the mime-type specified.
	 *
	 * @param string $mime_type The mime type to check.
	 * @return bool
	 */
	public static function supports_mime_type( $mime_type ) {
		return 'image/webp' !== $mime_type;
	}
}
