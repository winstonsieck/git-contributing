<?php
/**
 * Sample Test to make sure everything is wired correctly.
 *
 * NOTE: Delete this file once there is at least one integration test.
 *
 * @package     KnowTheCode\GitContributing\Tests\PHP\Integration
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/git-contributing
 * @license     GNU-2.0+
 */

namespace KnowTheCode\GitContributing\Tests\PHP\Integration;

use function KnowTheCode\GitContributing\_get_plugin_directory;

/**
 * Class Tests_SampleTest
 *
 * @package KnowTheCode\GitContributing\Tests\PHP\Integration
 */
class Tests_SampleTest extends Test_Case {

	/**
	 * Test plugin should load bootstrap file.
	 */
	public function test_plugin_should_load_bootstrap_file() {
		$this->assertContains( 'git-contributing', _get_plugin_directory() );
	}
}
