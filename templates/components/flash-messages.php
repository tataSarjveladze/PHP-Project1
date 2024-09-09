<?php

use Omedia\HttpFoundation\FlashMessage;

$messages = FlashMessage::getMessages();
?>

    <style>
        .flash-message {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            text-align: center;
        }

        .flash-message.success {
            background-color: #d4edda;
            color: #155724;
        }

        .flash-message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>

<div class="container">
  <?php if (!empty($messages)): ?>
    <?php foreach ($messages as $message): ?>
          <div class="flash-message <?php echo $message['type'] ?>">
            <?php echo htmlspecialchars($message['message'], ENT_QUOTES, 'UTF-8') ?>
          </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>