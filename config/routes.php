<?php
    return array(
        'news/([0-9]+)' => 'news/view/$1', //для просмотра конкретной новости
        'news' => 'news/index', //запросу news соответствует ст. news/index, будет вызван actionList с ProductController
        //'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
    );
?>