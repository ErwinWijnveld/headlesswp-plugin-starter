<?php

namespace HeadlesswpPluginStarter;

use HeadlesswpPluginStarter\Interfaces\Hookable;

/**
 * Main plugin class.
 */
final class HeadlesswpPluginStarter
{
	/**
	 * Class instances.
	 */
	private $instances = [];

	/**
	 * Main method for running the plugin.
	 */
	public function run()
	{
		include __DIR__ . '/helpers.php';
		include __DIR__ . '/setup.php';
		$this->create_instances();
		$this->register_hooks();
	}

	private function create_instances()
	{
		$this->instances['project_post_type'] = new PostTypes\ProjectPostType();
		$this->instances['fields'] = new Acf\AcfSetup();
		$this->instances['options_pages'] = new OptionsPages\RegisterOptionsPages();
	}

	private function register_hooks()
	{
		foreach ($this->get_hookable_instances() as $instance) {
			$instance->register_hooks();
		}
	}

	private function get_hookable_instances()
	{
		return array_filter($this->instances, fn ($instance) => $instance instanceof Hookable);
	}
}