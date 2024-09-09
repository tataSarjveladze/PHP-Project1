#!/usr/bin/php

<?php

require __DIR__ . '/../vendor/autoload.php';

use Omedia\Command\GenerateControllerCommand;

// Register commands.
$commands = [
    new GenerateControllerCommand(),
];

$command_name = $argv[1];

foreach ($commands as $command) {
    if ($command->name === $command_name) {
        $command->execute();
        exit(0);
    }
}

echo "Command not found $command_name";
exit(1);
