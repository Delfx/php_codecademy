<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Services;

$form = new Services\FormBuilder;

// var_dump($form->getData());
 
echo $form->open('index.php', 'POST');
echo $form->label('some-id');
echo $form->input('text', 'Enter value', '');
echo $form->input('password', 'Enter password', '');

echo $form->textarea('Enter text');
echo $form->password('Enter password');

echo $form->submit('go');
echo $form->close();


