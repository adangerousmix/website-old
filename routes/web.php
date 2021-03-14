<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $client = new Client([
        'base_uri' => 'https://decapi.me',
        'timeout' => 2.0,
    ]);

    $response = $client->request('GET', '/twitch/uptime/adangerousmix');
    $twitch = $response->getBody()->getContents();

    $response = $client->request('GET', '/youtube/latest_video?id=UCLpB_yYrVugRdjTf4tG4Z7A');
    $youtube = $response->getBody()->getContents();
    $youtube = substr($youtube, strpos($youtube, 'https://youtu.be') + 17, strlen($youtube));

    $video = 'twitch';

    if ($twitch == 'adangerousmix is offline') {
        $video = 'youtube';
    }

    return view('home', compact(['video', 'youtube']));
});

Route::get('wp', function () {
    return view('watchparty');
});

Route::get('watchparty', function () {
    return view('watchparty');
});

// Route::get('custom-widgets', function () {
//     return view('customwidgets');
// });

Route::get('crewlink', function () {
    return view('crewlink');
});