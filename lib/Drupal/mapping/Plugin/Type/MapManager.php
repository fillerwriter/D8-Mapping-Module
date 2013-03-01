<?php

namespace Drupal\mapping\Plugin\Type;

use Drupal\Component\Plugin\PluginManagerBase;
use Drupal\Core\Plugin\Discovery\AnnotatedClassDiscovery;
use Drupal\Component\Plugin\Discovery\DerivativeDiscoveryDecorator;
use Drupal\Core\Plugin\Discovery\CacheDecorator;
use Drupal\Component\Plugin\Factory\DefaultFactory;

class MapManager extends PluginManagerBase {
  /**
   * Constructs a new \Drupal\mapping\Plugin\Type\MapManager object.
   */
  public function __construct(array $namespaces) {
    $this->discovery = new AnnotatedClassDiscovery('mapping', 'map', $namespaces); // Finds standalone map plugins
    $this->discovery = new DerivativeDiscoveryDecorator($this->discovery); // Finds map entities
    // $this->discovery = new CacheDecorator($this->discovery, 'maps'); Caches plugin definitions
    $this->factory = new DefaultFactory($this);
  }
}
