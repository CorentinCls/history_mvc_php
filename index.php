<?php

require_once 'connec.php';

require_once 'src/models/story-model.php';

$stories = getAllStories();

require_once 'src/views/index.php';