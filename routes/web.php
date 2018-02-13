<?php
Route::get('/', function () {
	    return redirect('admin/dashboard');
	});

Route::group(['prefix' => 'admin', 'middleware' =>  ['role:admin, owner']], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
	
	Route::get('dashboard', 'DashboardController@index');

	Route::get('autenticacion', 'AdminController@autenticacion');

	Route::resource('mercadoadmin', 'Admin\MercadoAdminController');

	Route::resource('notices', 'Admin\NoticeAdminController');

	Route::resource('push', 'Admin\PushAdminController');

	Route::resource('clients', 'Admin\ClientsController');

	Route::post('addpoints', 'Admin\ClientsController@addPoints');

	Route::post('quitpoints', 'Admin\ClientsController@quitpoints');

/*
*	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
*

*/
/*
*	Route::post('password/reset', 'Auth\PasswordController@reset');
*/

});
Route::post('admin/register','Auth\RegisterBackpack@register');

 Route::post('sendresetemail', 'Auth\ForgotPasswordController@sendResetLinkEmail'); 

Route::get('endpoints', function(){
	return view('endpoints');
});
