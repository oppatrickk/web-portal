<?php

use google\appengine\api\mail\Message;

$message_body = 'Hello. This is the body of the message.';

$mail_options = [
    'sender' => 'recovery@codex-bu.appspotmail.com',
    'to' => 'prieto.patrick15@gmail.com',
    'subject' => 'Your account has been activated.',
    'textBody' => $message_body
];

try {
    $message = new Message($mail_options);
    $message->send();
} catch (InvalidArgumentException $e) {
    echo 'error: ';
}
?>