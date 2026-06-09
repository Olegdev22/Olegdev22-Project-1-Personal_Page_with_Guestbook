<?php

$messages = getMessages(connectDB());
renderView(
    'guestbook_get',
     data: [
        'messages' => $messages
    ]
);
