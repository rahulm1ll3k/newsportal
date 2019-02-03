<?php 
$url = $_SERVER['HTTP_REFERER'];
$category = array(
    1 => 'Entertainment',
    2 => 'Study',
    3 => 'Education',
    4 => 'Crime',
);
$users = array(
    1 => 'Rahul Mallik',
    2 => 'Himel Im',
    3 => 'Shakil Ah',
);
$newsList = array(
    array(
        'id'            => 1,
        'title'         => 'Welcome to my high-fashion, trash shopping mall',
        'category'      => 1,
        'publisher'     => '2',
        'publish_date'  => '12/2/2019',
        'status'        => '1',
    ),
    array(
        'id'            => 2,
        'title'         => 'Starting a new career... in your 80s',
        'category'      => 3,
        'publisher'     => '3',
        'publish_date'  => '12/2/2019',
        'status'        => '2',
    ),
    array(
        'id'            => 3,
        'title'         => 'How do you compost a human body - and why would you?',
        'category'      => 2,
        'publisher'     => '1',
        'publish_date'  => '12/2/2019',
        'status'        => '1',
    ),
    array(
        'id'            => 4,
        'title'         => "A photographer's Trans-Siberian World Cup journey",
        'category'      => 3,
        'publisher'     => '2',
        'publish_date'  => '12/2/2019',
        'status'        => '0',
    ),
);
?>