<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::resource('quotes','Api\V1\QuotesController');
    Route::post('quotes/{id}','Api\V1\QuotesController@update');
    Route::delete('quotes/{id}','Api\V1\QuotesController@destroy');
});