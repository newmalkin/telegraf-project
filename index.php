<?php

$textStorage = [];

$textStorage [] = [
    'title' => 'Первый заголовок',
    'text' => 'Это первый текст.'
];

$textStorage [] = [
    'title' => 'Второй заголовок',
    'text' => 'Это второй текст.'
];

echo $textStorage[0]['title'];
echo "\n"; 
echo $textStorage[0]['text'] ;