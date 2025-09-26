<?php
include "../botcx/Bot.php";
$bot = new Bot;
$questions = [
    
    //Preguntas Calificacion App//
    "cuando es el proximo envio de comunicacion?" => "Cada miércoles",
    "Planta" => "<a href='../../sucur/sur.php'>Mira</a>",
    //Nombre
    "como te llamas?" =>"Soy CX Bot y estoy para servirte",

    //Saludo - inicio
    "hola" =>"Hola Gennial, un gusto saludarte!!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",

    //Nombre Bot
    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con NPS o Calificacion de la App");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
} -->
