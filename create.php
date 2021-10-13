<?php
require_once 'connec.php';
require_once 'src/models/story-model.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $story = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
    ];

    if (empty($errors)) {
        createStory($story);
        header('Location: /');
    }
}

require_once 'src/views/create.php';


