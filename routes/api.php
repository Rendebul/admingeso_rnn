<?php

use Illuminate\Http\Request;

Route::get('datosGPS', function(){
	dd(request()->all());
	return ['tiempo'=>55];
});

Route::group(['middleware' => ['auth:api', 'admin'], 'namespace' => 'Api'], function () {
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::get('permissions', 'PermissionsController@index');
    Route::resource('regions', 'RegionController');
    Route::resource('serviciosSalud', 'ServicioSaludController');
    Route::resource('comunas', 'ComunaController');
    Route::resource('establecimientos', 'EstablecimientoController');
    Route::get('/admin/me', function (Request $request) {
        return $request->user()->load('notifications', 'roles:id,name');
    });
});

Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {
    Route::get('/me', function (Request $request) {
        return $request->user()->load('notifications', 'roles:id,name');
    });
    Route::post('/markNotificationsAsRead', function (Request $request) {
        $request->user()->unreadNotifications()->update(['read_at' => \Carbon\Carbon::now()]);
    });
    Route::resource('archivoCargas', 'ArchivoCargasController', ['only' =>['index', 'store', 'show']]);
    Route::group(['prefix' => 'archivoCargasActual/{idArchivo}'], function ($idArchivo) {
        Route::get('errores', 'ArchivoCargasController@getErrores');
    });
    Route::post('changePassword', 'UsersController@changePassword');
    Route::get('fixerDatos', 'DatosController@fix');
});

Route::post('/pdf', function(Request $request) {
    return PDF::loadView('pdf', ['html' => $request->html])->inline();
});
