<?php

use Illuminate\Http\Request;
use App\Services\PythonService;

Route::get('datosGPS', function(){
	//dd(request()->all());
	$ps = new PythonService;
	$datos = $ps->callDato(request());
	if ((int)$datos[1]!=0) {
		return ['tiempo'=>'Error'];
	} else {
		return ['tiempo'=>(float)$datos[0]];
	}

	//return $ps->callDato(request());
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
