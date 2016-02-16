<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Allergy.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('index.html.twig');
    });

    $app->get("/return_results", function() use ($app) {
        $my_allergy = new Allergy;
        $results = $my_allergy->returnAllergens($_GET['allergy_code']);

        return $app['twig']->render('index.html.twig', array(
            'results' => $results
        ));
    });

    return $app;
?>
