<?php

Route::group(array('domain' => '{domain3}.{domain2}.{domain1}'), function()
{
    Route::get('{pagepath?}', 'PageController@contentReturn')->where('pagepath','[A-Za-z0-9/_\-]+');
});

// Route::get('/', function()
// {
//     return View::make('hello');
// });
App::missing(function($exception)
{
    // return Response::view('errors.missing', array(), 404);
    // return 'not found';
    return Redirect::to('http://www2.bj80.org');
});