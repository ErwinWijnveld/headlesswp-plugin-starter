<?php

namespace HeadlesswpPluginStarter\Interfaces;

/**
 * Interface CustomPostType;
 */
interface CustomPostType {
	/**
	 * Register custom post type.
	 *
	 * @return void
	 */
	public function register(): void;
}