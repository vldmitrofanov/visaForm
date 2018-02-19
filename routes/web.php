<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '{lang}', 'middleware' => ['locale']], function(){
    //App::setLocale($locale);
    Route::get('application', 'VisaApplicationController@getVisaApp')->name('getVisaApp');
    Route::post('application', 'VisaApplicationController@postVisaApp')->name('postVisaApp');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth.basic']], function(){
    Route::get('/', function () {
        return view('temp');
    });
    
//    Route::get('{locale}/application', 'VisaApplicationController@getVisaApp')->name('getVisaApp');
//    Route::get('{locale}/application', function ($locale) {
//        App::setLocale($locale);
//        return view('visa1');
//    });
    
    // More examples https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/routes/web.php
    
    Route::get('put', function() {
        Storage::cloud()->put('test.txt', 'Hello World');
        return 'File was saved to Google Drive';
    });
    
    Route::get('list', function() {
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        //return $contents->where('type', '=', 'dir'); // directories
        return $contents->where('type', '=', 'file'); // files
    });
    
    Route::get('delete', function() {
        $filename = 'test.txt';
        // First we need to create a file to delete
        Storage::cloud()->makeDirectory('Test Dir');
        // Now find that file and use its ID (path) to delete it
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!
        Storage::cloud()->delete($file['path']);
        return 'File was deleted from Google Drive';
    });
});

Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic');
