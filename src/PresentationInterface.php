<?php

/**
 * @file
 * Contains \Drupal\slides_presentation\PresentationInterface.
 */

namespace Drupal\slides_presentation;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Presentation entities.
 *
 * @ingroup slides_presentation
 */
interface PresentationInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
