<?php

/**
 * @file
 * Contains \Drupal\mapping\Plugin\Derivative\Map.
 */

namespace Drupal\mapping\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DerivativeInterface;

/**
 * Retrieves custom map derivatives.
 */
class Map implements DerivativeInterface {

  /**
   * List of derivative definitions.
   *
   * @var array
   */
  protected $derivatives = array();

  /**
   * Implements \Drupal\Component\Plugin\Derivative\DerivativeInterface::getDerivativeDefinition().
   *
   * Retrieves a specific custom block definition from storage.
   */
  public function getDerivativeDefinition($derivative_id, array $base_plugin_definition) {
    if (!empty($this->derivatives) && !empty($this->derivatives[$derivative_id])) {
      return $this->derivatives[$derivative_id];
    }
    $this->getDerivativeDefinitions($base_plugin_definition);
    return $this->derivatives[$derivative_id];
  }

  /**
   * Implements \Drupal\Component\Plugin\Derivative\DerivativeInterface::getDerivativeDefinitions().
   *
   * Retrieves custom block definitions from storage.
   */
  public function getDerivativeDefinitions(array $base_plugin_definition) {
    // Dummy content, just to see if it works.
    $this->derivatives = array(
      'derivative_1' => array(
        'id' => 'Test',
        'module' => 'mapping',
        'label' => 'Dummy Derivative Map',
        'class' => '/dummy/class',
      ),
      'derivative_2' => array(
        'id' => 'Test',
        'module' => 'mapping',
        'label' => 'Dummy Derivative Map',
        'class' => '/dummy/class',
      ),
      'derivative_3' => array(
        'id' => 'Test',
        'module' => 'mapping',
        'label' => 'Dummy Derivative Map',
        'class' => '/dummy/class',
      )
    );
    return $this->derivatives;
  }
}
