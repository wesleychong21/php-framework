<?php

/**
 * User: Wesley
 * Date: 22 Sept 2021
 * 
 */

$app = new Application();

$app->router->get('/', function(){
    return 'Hello World';
});



