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

use App\Http\Controllers\indexController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return "HOla mundo";
});

Route::get('/pelicula/{genero}', function($genero){
    return $genero;
});

Route::get('/post/{numero?}', function($numero=1){
    return "Vista número {$numero}";
})->where('numero','[0-9]+');

Route::get('/vista',function(){
    /*return view('vista1',[
        'name'=>'Xavi'
    ]);*/

   // return view('vista1')->with('name','xavi');
   /* $name ='Xavi';
    return view('vista1',['name'=>$name]);*/
   $name='Xavi';
   return view('vista1', compact('name'));

});

Route::get('/vista2',function(){
   $films = [
       'Superman',
       'Spiderman',
       'Antman',
       'Batman'
   ] ;
   return view('vista2', compact('films'));
});

Route::get('/films',function(){
    $films = DB::table('films')->get();
    return view ('films',compact('films'));
});
