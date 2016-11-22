<?php

Route::post(
    Config::get('inimedia-foundation.route'),
    'Inimedia\Foundation\UniversalAjaxController@index'
);

Route::post('/fine_uploader', 'Inimedia\Foundation\FineUploaderController@upload')->middleware('cors');
Route::delete('/fine_uploader/{uuid}', 'Inimedia\Foundation\FineUploaderController@delete')->middleware('cors');