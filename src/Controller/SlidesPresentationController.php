<?php

/**
 * @file
 * Contains \Drupal\slides_presentation\Controller\SlidesPresentationController.
 * @author Marouan Hammami mh.marouan@gmail.com
 */

namespace Drupal\slides_presentation\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Controller for page presentation route.
 */
class SlidesPresentationController extends ControllerBase {

  
  public function content($id_presentation) {
    
    return array(
      '#theme' => 'page__slides',
    );
    
  }


}