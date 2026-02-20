<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
//Incializar nueva sesion de cURL; ch = curl handle
$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutar la solicitud y almacenar la respuesta en una variable
$response = curl_exec($ch);
$data = json_decode($response, true);



?>

<head>
    <meta charset="UTF-8" />
    <title>La proxima pelicula de Marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Cual es la proxima pelicula de Marvel?" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <section>
        <img 
        src="<?=  $data["poster_url"]; ?>" width = 
        "200"  alt="Poster de <?= $data["title"] ?>"
        style="border: 2px solid #000; border-radius: 16px"/>
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
        <p> Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p> La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: ligth dark;
    }

    body {
        display : grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>
    