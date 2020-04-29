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

// authentication route
Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth', 'verified']], function () {

    // dashboard route
    Route::get('/', 'NotesController@showNotes')->name('dashboard');

    // users route
    Route::prefix('users')->group(function () {
        Route::get('/changepassword', function () {
            return view('backend.pages.update-password');
        })->name('changePassword');
        Route::put('/updatepassword', 'UserController@updatePassword')->name('updatePassword');
    });

    // orders route
    Route::prefix('orders')->group(function () {
        Route::get('/', 'OrderController@index')->name('listOrder');
        Route::get('/add-order', function () {
            return view('backend.pages.add-order');
        });
        Route::post('/add-order', 'OrderController@store')->name('addOrder');
        Route::get('{id}/edit-order', 'OrderController@edit')->name('editOrder');
        Route::patch('{id}/edit-order', 'OrderController@update')->name('updateOrder');
        Route::delete('{id}/delete-order', 'OrderController@delete')->name('deleteOrder');
    });
    // progress route
    Route::prefix('progress')->group(function () {
        route::get('/{id}/show-progress', 'ProgressController@show')->name('showProgress');
        Route::get('/', 'ProgressController@index')->name('listProgress');
        Route::get('{id}/add-progress', 'ProgressController@add')->name('addProgress');
        Route::post('{id}/add-progress', 'ProgressController@addProgress')->name('storeProgress');
        Route::post('{id}/delete-progress', 'ProgressController@drop')->name('dropProgress');
    });
    // tasks or category route
    Route::prefix('tasks')->group(function () {
        Route::get('/', 'CategoryController@index')->name('listCategories');
        Route::get('/add-task', 'CategoryController@create');
        Route::post('/add-task', 'CategoryController@store')->name('addCategory');
        route::get('/{id}/edit-task', 'CategoryController@edit')->name('editCategory');
        route::patch('/{id}/edit-task', 'CategoryController@update')->name('updateCategory');
        route::delete('{id}/delete-task', 'CategoryController@delete')->name('deleteCategory');
    
        Route::post('{id}/edit-notes', 'OrderController@editNotes')->name('editNotes');
        Route::get('{id}/view-notes', 'OrderController@viewNotes')->name('viewNotes');
    });
    // Adwords route
    Route::prefix('adwords')->group(function () {
        Route::prefix('transfers')->group(function () {
            Route::get('/', 'TransferController@index')->name('listTransfer');
            Route::get('/add-transfer', 'TransferController@show')->name('addTransfer');
            Route::post('/add-transfer', 'TransferController@create')->name('storeTransfer');
            Route::get('/{id}/edit-transfer', 'TransferController@edit')->name('editTransfer');
            Route::patch('/{id}/edit-transfer', 'TransferController@update')->name('updateTransfer');
        });

        Route::prefix('campaigns')->group(function () {
            Route::get('/', 'CampaignController@index')->name('listCampaign');
            Route::get('/add-campaign', 'CampaignController@show')->name('addCampaign');
            Route::post('/add-campaign', 'CampaignController@store')->name('addCampaign');
            Route::get('/{id}/edit-campaign', 'CampaignController@edit')->name('editCampaign');
            Route::patch('/{id}/edit-campaign', 'CampaignController@update')->name('updateCampaign');
            Route::delete('/{id}/delete-campaign', 'CampaignController@delete')->name('deleteCampaign');
        });
    });

    // hosting route
    Route::prefix('hosting')->group(function (){
        Route::get('/', 'HostingController@index')->name('listHosting');
        Route::post('add-hosting', 'HostingController@create')->name('addHosting');
        Route::get('{id}/show-hosting', 'HostingController@show')->name('showHosting');
        Route::post('{id}/edit-hosting', 'HostingController@update')->name('updateHosting');
        Route::delete('{id}/delete-hosting', 'HostingController@delete')->name('deleteHosting');
    });

    // website domain route
    Route::prefix('domain')->group(function () {
        Route::get('/', 'WebsiteController@index')->name('listDomain');
        Route::post('add-domain', 'WebsiteController@create')->name('addDomain');
        Route::get('{id}/show-domain', 'WebsiteController@show')->name('showDomain');
        Route::post('{id}/edit-domain', 'WebsiteController@update')->name('updateDomain');
        Route::delete('{id}/delete-domain', 'WebsiteController@delete')->name('deleteDomain');
    });

    Route::prefix('api/v1')->group(function () {
        Route::post('/{id}/delete-transfer', 'TransferController@delete')->name('deleteTransfer');
    });

    Route::prefix('notes')->group(function () {
        Route::get('/add-notes', 'NotesController@AddUserNotes')->name('addUserNotes');
        Route::post('/add-notes', 'NotesController@store')->name('storeUserNotes');
    });

    // deadline route
    Route::get('/deadline', function () {
        return view('backend.pages.deadline');
    })->name('deadline');
    // deadline json route
    Route::prefix('deadline')->group(function () {
        Route::get('/show-deadline', 'DeadlineController@index')->name('listDeadline');
    });

    // user notification route
    Route::prefix('notifications')->group(function () {
        Route::get('/allread', 'UserController@markAllAsRead')->name('markAllAsRead');
    });
});