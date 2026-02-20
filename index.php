<?php

$name = "TebanDev98";
$isDev = true;
$age = 18;

$output = "Hola $name, tienes $age años. Bienvenido a PHP. 😀";

$outputAge = match (true) {
    $age < 2 => "Eres un bebé 👶",
    $age < 12 => "Eres un niño 👦",
    $age < 18 => "Eres un adolescente 🧒",
    $age === 18 => "Eres mayor de edad 🍻",
    $age < 30 => "Eres un joven adulto 👨‍🦱",
    $age < 60 => "Estas con un pie alla y otro aca ⚰️",
};
//Variables globales y locales

//Variable global, se puede acceder desde cualquier parte del código

define('LOGO_URL', 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png');

//Variable local, como constante, solo se puede acceder dentro de la función

const NOMBRE = "TebanDev98" ;

//Arrays

$bestlenguajes = ["PHP", "JavaScript", "Python", "C#", "Java"];
$bestlenguajes [4] = "TypeScript"; //Agrega un nuevo elemento al array
$bestlenguajes [] = "Go"; //Agrega un nuevo elemento al array

//Arrays asociativos

$person = [
    "name" => "TebanDev98",
    "age" => 18,
    "isDev" => true,
    "lenguajes" => ["PHP", "JavaScript", "Python", "C#", "Java"]
];

$person ["name"] = "Deivy Urbina"; //Modifica el valor de la clave "name"
$person ["lenguajes"] [] = "Go"; //Agrega un nuevo elemento al array de la clave "lenguajes"
?>

<ul>
    <?php foreach ($bestlenguajes as $key => $lenguajes) : ?>
        <li><?=  $key . " " . $lenguajes ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>
<img src="<?= LOGO_URL ?>" alt="PHP LOGO" width="200">
<h1>
    <?= $output ?>
</h1>

<style>
    :root {
        color-scheme: ligth dark;
    }

    body {
        display : grid;
        place-content: center;
    }
</style>