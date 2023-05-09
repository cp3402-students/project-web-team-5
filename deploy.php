<?php
// Set your secret key (make sure to keep it secret)
$secret_key = 'YOUR_SECRET_KEY';

// Get the payload from the webhook
$payload = file_get_contents('php://input');
$signature = hash_hmac('sha1', $payload, $secret_key);

// Verify the payload signature
if (hash_equals($signature, $_SERVER['HTTP_X_HUB_SIGNATURE'])) {
    // Pull the latest changes
    exec('git pull');
} else {
    // Log an error if the signature doesn't match
    error_log('Invalid signature', 0);
}
