<?php

use Omedia\HttpFoundation\FlashMessage;

$messages = FlashMessage::getMessages();
?>

<div class="container">
  <?php if (!empty($messages)): ?>
    <?php foreach ($messages as $message): ?>
          <div class="flash-message <?php echo $message['type'] ?>">
            <?php echo htmlspecialchars($message['message'], ENT_QUOTES, 'UTF-8') ?>
          </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
