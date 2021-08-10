<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login','App\Http\Controllers\AuthController@login');
Route::get('logout','App\Http\Controllers\AuthController@logout');
Route::post('register','App\Http\Controllers\AuthController@register');

Route::group(['middleware' => 'auth:api'],function (){
    Route::get('index','App\Http\Controllers\AuthController@index');
    Route::patch('update/{user}','App\Http\Controllers\AuthController@update');
    Route::delete('delete/{user}','App\Http\Controllers\AuthController@destroy');
    Route::get('user-profile','App\Http\Controllers\AuthController@show');
    Route::get('test','App\Http\Controllers\AuthController@test');
   /*
    Route::get('category/index','App\Http\Controllers\categorie\CategorieController@index');
    Route::post('category/add','App\Http\Controllers\categorie\CategorieController@store');
    Route::get('category/show/{category}','App\Http\Controllers\categorie\CategorieController@show');
    Route::patch('category/update/{category}','App\Http\Controllers\categorie\CategorieController@update');
    Route::delete('category/delete/{category}','App\Http\Controllers\categorie\CategorieController@destroy');

    Route::get('product/index','App\Http\Controllers\product\ProductController@index');
    Route::post('product/add','App\Http\Controllers\product\ProductController@store');
    Route::get('product/show/{product}','App\Http\Controllers\product\ProductController@show');
    Route::patch('product/update/{product}','App\Http\Controllers\product\ProductController@update');
    Route::delete('product/delete/{product}','App\Http\Controllers\product\ProductController@destroy');

    Route::get('type-client/index','App\Http\Controllers\client\TypeClientController@index');
    Route::post('type-client/add','App\Http\Controllers\client\TypeClientController@store');
    Route::get('type-client/show/{typeClient}','App\Http\Controllers\client\TypeClientController@show');
    Route::patch('type-client/update/{typeClient}','App\Http\Controllers\client\TypeClientController@update');
    Route::delete('type-client/delete/{typeClient}','App\Http\Controllers\client\TypeClientController@destroy');

    Route::get('client/index','App\Http\Controllers\client\ClientController@index');
    Route::post('client/add','App\Http\Controllers\client\ClientController@store');
    Route::get('client/show/{client}','App\Http\Controllers\client\ClientController@show');
    Route::patch('client/update/{client}','App\Http\Controllers\client\ClientController@update');
    Route::delete('client/delete/{client}','App\Http\Controllers\client\ClientController@destroy');

    Route::get('invent/index','App\Http\Controllers\inventaire\InventaireController@index');
    Route::post('invent/add','App\Http\Controllers\inventaire\InventaireController@store');
    Route::get('invent/show/{inventaire}','App\Http\Controllers\inventaire\InventaireController@show');
    Route::patch('invent/update/{inventaire}','App\Http\Controllers\inventaire\InventaireController@update');
    Route::delete('invent/delete/{inventaire}','App\Http\Controllers\inventaire\InventaireController@destroy');

    Route::get('feedback/index','App\Http\Controllers\inventaire\FeedbackController@index');
    Route::post('feedback/add','App\Http\Controllers\inventaire\FeedbackController@store');
    Route::get('feedback/show/{feedback}','App\Http\Controllers\inventaire\FeedbackController@show');
    Route::patch('feedback/update/{feedback}','App\Http\Controllers\inventaire\FeedbackController@update');
    Route::delete('feedback/delete/{feedback}','App\Http\Controllers\inventaire\FeedbackController@destroy');

    Route::get('command/index','App\Http\Controllers\command\CommandController@index');
    Route::post('command/add','App\Http\Controllers\command\CommandController@store');
    Route::get('command/show/{commande}','App\Http\Controllers\command\CommandController@show');
    Route::patch('command/update/{commande}','App\Http\Controllers\command\CommandController@update');
    Route::delete('command/delete/{commande}','App\Http\Controllers\command\CommandController@destroy');

    Route::get('detail-command/index','App\Http\Controllers\command\DetailCommandeController@index');
    Route::post('detail-command/add','App\Http\Controllers\command\DetailCommandeController@store');
    Route::get('detail-command/show/{detailsCommande}','App\Http\Controllers\command\DetailCommandeController@show');
    Route::patch('detail-command/update/{detailsCommande}','App\Http\Controllers\command\DetailCommandeController@update');
    Route::delete('detail-command/delete/{detailsCommande}','App\Http\Controllers\command\DetailCommandeController@destroy');

    Route::get('statistique/index','App\Http\Controllers\statistiqueCommande@index'); */
});