<?php
    require_once __DIR__."/../vendor/autoload.php";
    // require_once __DIR__."/../src/Contact.php";
    date_default_timezone_set('America/Los_Angeles');

    session_start();
    // if (empty($_SESSION['hangman'])){
    //   $_SESSION['hangman'] = "";
    // }
    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app){
      return $app['twig']->render('home.html.twig');
    });
    return $app;
?>
