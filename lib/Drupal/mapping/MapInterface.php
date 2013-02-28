<?php

/**
 * @file
 * Contains \Drupal\mapping\MapInterface.
 */

namespace Drupal\mapping;

interface MapInterface {
  /**
   * Loads assets, renders map.
   *
   * @return Drupal render array.
   */
  public function build();
}
