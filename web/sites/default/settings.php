<?php

 $databases = [];

 $settings['config_sync_directory'] = '../config/sync';

 $settings['hash_salt'] = '';

 $settings['update_free_access'] = FALSE;

 $settings['locale_custom_strings_en'][''] = [
   'Website feedback' => 'Contacta con Nosotros',
#   '@count min' => '@count minutes',
 ];

 $settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * Trusted host configuration.
 *
 * Drupal core can use the Symfony trusted host mechanism to prevent HTTP Host
 * header spoofing.
 *
 * To enable the trusted host mechanism, you enable your allowable hosts
 * in $settings['trusted_host_patterns']. This should be an array of regular
 * expression patterns, without delimiters, representing the hosts you would
 * like to allow.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = [
 *   '^www\.example\.com$',
 * ];
 * @endcode
 * will allow the site to only run from www.example.com.
 *
 * If you are running multisite, or if you are running your site from
 * different domain names (eg, you don't redirect http://www.example.com to
 * http://example.com), you should specify all of the host patterns that are
 * allowed by your site.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = [
 *   '^example\.com$',
 *   '^.+\.example\.com$',
 *   '^example\.org$',
 *   '^.+\.example\.org$',
 * ];
 * @endcode
 * will allow the site to run off of all variants of example.com and
 * example.org, with all subdomains included.
 *
 * @see https://www.drupal.org/docs/installing-drupal/trusted-host-settings
 */
# $settings['trusted_host_patterns'] = [];

  $settings['file_scan_ignore_directories'] = [
    'node_modules',
    'bower_components',
  ];

  $settings['entity_update_batch_size'] = 50;

$settings['entity_update_backup'] = TRUE;

$settings['state_cache'] = TRUE;

$settings['migrate_node_migrate_type_classic'] = FALSE;
/*
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}*/

$databases['default']['default'] = array (
  'database' => 'munaycobbdd',
  'username' => 'munaycouser',
  'password' => 'munaycopass',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

if (getenv('IS_DDEV_PROJECT') == 'true' && file_exists(__DIR__ . '/settings.ddev.php')) {
  include __DIR__ . '/settings.ddev.php';
}
