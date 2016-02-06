<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;

$app->get('/', function () use ($app) {


    return $app->version();
});

$app->get('map',function() use ($app){

$map = new Map();

$map->setPrefixJavascriptVariable('map_');
$map->setHtmlContainerId('map_canvas');

$map->setAsync(false);
$map->setAutoZoom(false);

$map->setCenter(0, 0, true);
$map->setMapOption('zoom', 3);

$map->setBound(-2.1, -3.9, 2.6, 1.4, true, true);

$map->setMapOption('mapTypeId', MapTypeId::ROADMAP);
$map->setMapOption('mapTypeId', 'roadmap');

$map->setMapOption('disableDefaultUI', true);
$map->setMapOption('disableDoubleClickZoom', true);
$map->setMapOptions(array(
    'disableDefaultUI'       => true,
    'disableDoubleClickZoom' => true,
));

$map->setStylesheetOption('width', '300px');
$map->setStylesheetOption('height', '300px');
$map->setStylesheetOptions(array(
    'width'  => '300px',
    'height' => '300px',
));

$map->setLanguage('en');
});
