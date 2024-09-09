<?php

namespace GFF\Official\Controller;

require  'common/data.php';

use Omedia\Temple\TemplateRenderer;

/**
 * Controller for the PlayersController
 */
class PlayersController extends PageController {

    /**
     * The __invoke description.
     */
    public function __invoke(): void {
        $players = get_players();
        $this->renderTemplate('players', ['players' => $players]);
    }
}
