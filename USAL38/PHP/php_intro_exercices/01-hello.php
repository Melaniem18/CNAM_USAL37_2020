<?php

function helloWorld()
{
    echo "Hello World !";
}

echo helloWorld();


echo "\n";

function hello(string $name)  
{ 
    return "Hello $name"; 
}

echo hello("Mike");