

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
Route::get(uri:'/', action: 'PagesController@index');
Route::get(uri:'/books', action: 'BooksController@index');
Route::get(uri:'/books/create', action: 'BooksController@create');
Route::get(uri:'/books/{id}', action: 'BooksController@show');
Route::post(uri:'/books', action:'BooksController@store')->name ('name : books.store');
Route::get('/', function () {
    return view('welcome');
});
Route::get (uri:'/test/{locale}',function($locale){
    App::setlocale($locale);
    dd(_(key:'message.welcome'));
   return database_path();
});

Route::get(uri:'/books';function(){
    $books =DB::table(table:'books')
    ->get();
    return view('books.index',compact('books'));

});

Route::get(uri:'/books/{id}';function($id){
    $book =DB::table(table:'books')
    ->find(id);
    return view('books.show',compact('book'));

});
