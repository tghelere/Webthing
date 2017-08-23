<?

require __DIR__ . "/../vendor/autoload.php";

use Silex\Application;

$app = new Application();
$app['debug'] = true;

$app->get('/', function(Application $app){
    return $app['twig']->render('index.twig');
});

/**
* Twig Provider
*/
$app->register(new Silex\Provider\TwigServiceProvider, ['twig.path' => '../views']);

//print_r($app);
$app->run();