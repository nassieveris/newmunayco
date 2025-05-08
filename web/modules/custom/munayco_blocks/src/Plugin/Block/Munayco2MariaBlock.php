<?php

namespace Drupal\munayco_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Munayco 2Maria' block.
 *
 * @Block(
 *   id = "munayco_2maria",
 *   admin_label = @Translation("Munayco 2Maria Block"),
 * )
 */
class Munayco2MariaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'munayco_2maria',
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

}
