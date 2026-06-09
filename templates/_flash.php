<?php

$messages = getFlashMessages()
?>

<?php if (!empty($messages)): ?>
    <div>
        <?php foreach ($messages as $type => $message) : ?>
            <div <?= htmlspecialchars($type) ?>>
                <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>