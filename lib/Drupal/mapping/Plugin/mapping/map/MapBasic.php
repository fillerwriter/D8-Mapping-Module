<?php

namespace Drupal\mapping\Plugin\mapping\map;

use Drupal\Core\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
use Drupal\mapping\MapInterface;

/**
 * @Plugin(
 *   id = "map_basic",
 *   module = "mapping",
 *   label = @Translation("Basic Map")
 * )
 */

class MapBasic implements MapInterface {
  public function build() {
    return array(
      'map' => array(
        '#markup' => '<div id="map_canvas" style="width: 100%; height: 500px">test</div>',
        '#attached' => array(
          'js' => array(
            'https://maps.googleapis.com/maps/api/js?sensor=false' => array(
              'type' => 'external',
            ),
            drupal_get_path('module', 'mapping') . '/js/tmp/MapBasic.js',
          ),
        ),
      ),
    );
  } 
}
