<?php

namespace Drupal\munayco_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Munayco Prefooter' block.
 *
 * @Block(
 *   id = "munayco_prefooter",
 *   admin_label = @Translation("Munayco Prefooter Block"),
 * )
 */
class MunaycoPrefooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'munayco_prefooter',
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

}
