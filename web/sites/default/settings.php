<?php

 $databases = [];

 $settings['config_sync_directory'] = '../config/sync';

 $settings['hash_salt'] = 'bb12c9cae5dafe2931f7e14a819177804bc6d133fddd788a8ae4e73222f8e8fb';

 $settings['update_free_access'] = FALSE;

 $settings['locale_custom_strings_en'][''] = [
   'Website feedback' => 'Contacta con Nosotros',
#   '@count min' => '@count minutes',
 ];

 $settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

  $settings['trusted_host_patterns'] = [
      '^45\\.61\\.60\\.195$',  // IP del servidor
      '^munayco\\.com\\.pe$',  // Dominio principal
      '^www\\.munayco\\.com\\.pe$',  // Subdominio www
  ];

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
