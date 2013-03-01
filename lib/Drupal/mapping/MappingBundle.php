<?php

/**
 * @file
 * Contains \Drupal\mapping\MappingBundle.
 */

namespace Drupal\Mapping;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Provides the block dependency injection container.
 */
class MappingBundle extends Bundle {

  /**
   * Overrides \Symfony\Component\HttpKernel\Bundle\Bundle::build().
   */
  public function build(ContainerBuilder $container) {
    // Register the BlockManager class with the dependency injection container.
    $container->register('plugin.manager.mapping', 'Drupal\mapping\Plugin\Type\MapManager')
      ->addArgument('%container.namespaces%');
  }

}
