<?php

namespace Drupal\munayco_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Munayco 2Consultoria' block.
 *
 * @Block(
 *   id = "munayco_2consultoria",
 *   admin_label = @Translation("Munayco 2Consultoria Block"),
 * )
 */
class Munayco2ConsultoriaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'munayco_2consultoria',
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

}
