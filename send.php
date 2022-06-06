<?php

$answers = $_POST['lead'];

$headers = 'From: hello@svitlo-production.com';

$answers = trim($answers);

$success = mail('hello@svitlo-production.com', 'Lead', $answers, $headers);

if (!$success) {
    echo 'error';
} else {
    echo 'success';
}

?>