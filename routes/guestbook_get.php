<?php

$messages = getMessages(connectDB());
// throw new RuntimeException("Whooops!");
echo $hey;
renderView(
    'guestbook_get',
     data: [
        'messages' => $messages
    ]
);
