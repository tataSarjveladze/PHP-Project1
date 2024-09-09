<?php

// Global variable containing the path to the data file.
$data_file = 'data.json';

/**
 * Get all players from the data file.
 *
 * @return array
 *   An array of players.
 */
function get_players(): array {
    // @todo: Global variable not working for some reason.
    global $data_file;

    $file_path = dirname(__DIR__) . '/' . 'data.json';
    // Check if the file exists.
    if (!file_exists($file_path)) {
        return [];
    }

    $data_json = file_get_contents($file_path);
    $data_array = json_decode($data_json, true);

    return $data_array['players'];
}