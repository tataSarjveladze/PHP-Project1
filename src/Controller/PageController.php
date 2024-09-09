<?php

namespace GFF\Official\Controller;


use Omedia\Temple\TemplateRenderer;

/**
 * Base class for controllers that render pages.
 */
class PageController extends BaseController {

  /**
   * HomeController constructor.
   */
  public function __construct(protected TemplateRenderer $templateRenderer) {}

  /**
   * A helper method to render a template.
   *
   * @param string $template
   *   The template to render.
   * @param array $data
   *   The data to pass to the template.
   *
   * @return void
   */
  public function renderTemplate(string $template, array $data = []): void {
    $this->templateRenderer->render($template, $data);
  }

}