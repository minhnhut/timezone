<?php


Route::get('timezones/{timezone?}',
    'minhnhut\timezone\TimezoneController@index');