<?php

namespace GFF\Official\Controller;

/**
 * Base class for controllers.
 */
class BaseController {

  /**
   *
   * Redirect to a different location.
   *
   * @param string $location
   *   The path to redirect to.
   */
  public function redirect(string $location): void {
    header('Location: ' . $location);
    exit(0);
  }
}