<?php

$inputs = [
    'email' => [
        'filter' => FILTER_VALIDATE_EMAIL,
        'error' => 'Please enter a valid email address.'
    ],

    'name' => [
        'filter' =>  FILTER_VALIDATE_REGEXP,
        'options' => ['regexp' => '/^[a-zA-Z\s\-]+$/'],
        'error' => 'Please enter your name.'
    ],

    // 'price' => [
    //     'filter' =>  FILTER_VALIDATE_REGEXP,
    //     'options' => ['regexp' => '/^[0-9]+$/'],
    //     'error' => 'Please enter your name.'
    // ],
    // 'age' => [
    //     'filter' => FILTER_VALIDATE_INT,
    //     'options' => ['min_range' => 1, 'max_range' => 120],
    //     'error' => 'Please enter a valid age between 1 and 120.'
    // ],
    // 'phone_number' => [
    //     'filter' => FILTER_VALIDATE_REGEXP,
    //     'options' => ['regexp' => '/^[0-9]{10}$/'],
    //     'error' => 'Please enter a valid 10-digit phone number.'
    // ]
];