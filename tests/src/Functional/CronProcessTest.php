<?php

namespace Drupal\Tests\cron_process\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test the existence of Admin Toolbar module.
 *
 * @group cron_process
 */
class CronProcessTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = [
    'cron_process_test',
  ];

  /**
   * Generic test for enabled module.
   */
  public function testModule() {
    $modules = \Drupal::moduleHandler()->getModuleList();
    $this->assertArrayHasKey('cron_process_test', $modules);
  }

}
