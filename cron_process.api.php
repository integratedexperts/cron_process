<?php

/**
 * @file
 * Cron Process API documentation.
 */

/**
 * Example of hook_cron_process().
 */
function hook_cron_process() {
  return [
    [
      'name' => 'machine name of this processor',
      // Callback function or static class method to perform discovery
      // of what should be process. It must return an instance of
      // DiscoveryResult object.
      'discovery callback' => 'MyClass::discover',
      'process callback' => 'MyClass::process',
      // Settings to be passed to hook_cron.
      'cron settings' => [],
    ],
  ];
}
