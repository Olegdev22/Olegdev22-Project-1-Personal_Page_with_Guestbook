<?php

$messages = getMessages(connectDB());
// throw new RuntimeException("Whooops!");

renderView(
    'guestbook_get',
     data: [
        'messages' => $messages
    ]
);
