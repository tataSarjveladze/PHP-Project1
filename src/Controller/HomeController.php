<?php

namespace GFF\Official\Controller;

use Omedia\Temple\TemplateRenderer;

class HomeController extends PageController {

    /**
     * Render the home page.
     *
     * @return void
     */
    public function __invoke(): void {
        $this->renderTemplate('home');
    }
}