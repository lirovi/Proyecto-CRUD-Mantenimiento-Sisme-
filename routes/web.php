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
    return view('app');
});

Route::get('/navbar', function () {
    return view('navbar');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'pusher', 'middleware' => ['auth']], function()
{
	Route::post('posts/{id}', function($id, \Illuminate\Http\Request $request){
		$comment = new \App\Comment([
			'comment' => $request->input('comment'),
			'user_id' => auth()->user()->id,
			'post_id' => $id

		]);
		$comment->save();

		broadcast(new \App\Events\FireComment($comment))->toOthers();

	})->name('comments.create');

	Route::get('posts/{id}', function($id){
		$post = \App\Post::findOrFail($id);
		return view('chat', compact('post'));
	});

	Route::get('comment/{id}', function($id){
		$comments = \App\Comment::where('post_id',$id)->with('user')-get();
		return response()->json('comments');
	})->name('comments.list');


});


Route::resource('tipoequipos','Miscontrollers\TipoequipoController');
Route::resource('equipos','Miscontrollers\EquipoController');
Route::resource('profesions','Miscontrollers\ProfesionController');
Route::resource('funcionarios','Miscontrollers\FuncionarioController');
Route::resource('cargos','Miscontrollers\CargoController',['except' => 'show' ]);
Route::resource('dptos','Miscontrollers\DptoController');
Route::resource('diagnosticos','Miscontrollers\DiagnosticoController');
Route::resource('unidads','Miscontrollers\UnidadController');
Route::resource('solucions','Miscontrollers\SolucionController');
Route::resource('tipomants','Miscontrollers\TipomantController');
Route::resource('designacions','Miscontrollers\DesignacionController');
Route::resource('mantenimientos','Miscontrollers\MantenimientoController');

