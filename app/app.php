<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";
    date_default_timezone_set('America/Los_Angeles');

    session_start();

    if (empty($_SESSION['list_of_contacts'])){
      $_SESSION['list_of_contacts'] = array();
    }
    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app){
        var_dump($_SESSION['list_of_contacts']);
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/create_contact", function() use ($app){
        $new_contact = new Contact($_POST['first_name'],$_POST['last_name'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip'], $_POST['image']);
        $new_contact-> save();
        return $app['twig']->render('create_contact.html.twig', array('contact'=> $new_contact));
    });

    $app->post("/delete_contacts", function() use ($app){
        Contact::deleteAll();
        return $app['twig']->render('delete_contacts.html.twig');
    });

    return $app;
?>
