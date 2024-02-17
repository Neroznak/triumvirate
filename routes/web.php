<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Project\DocController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::get('/', function () {
//    return view('home');
//});

//Route::get('/post', [IndexController::class, 'index']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace'=>'App\Http\Controllers\Company\IndexController',  'middleware'=>'auth'],function() {
    Route::get('/companies', 'App\Http\Controllers\Company\IndexController')->name('companies');
});


Route::group(['namespace'=>'App\Http\Controllers\Main\IndexController',  'middleware'=>'auth'],function() {
    Route::get('/main', 'App\Http\Controllers\Main\IndexController')->name('main');
});


Route::group(['namespace'=>'App\Http\Controllers\Department', 'prefix'=>'departments', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('departments.index');
    Route::get('/create', 'CreateController')->name('departments.create');
    Route::post('/', 'StoreController')->name('departments.store');
    Route::get('/{department}', 'ShowController')->name('departments.show');
    Route::get('/{department}/edit', 'EditController')->name('departments.edit');
    Route::patch('/{department}', 'UpdateController')->name('departments.update');
    Route::delete('/{department}', 'DestroyController')->name('departments.destroy');
});

Route::group(['namespace'=>'App\Http\Controllers\Task', 'prefix'=>'tasks', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('tasks.index');
    Route::get('/filter','FilterController')->name('tasks.filter.index');
    Route::get('/create', 'CreateController')->name('tasks.create');
    Route::post('/', 'StoreController')->name('tasks.store');
    Route::get('/{task}', 'ShowController')->name('tasks.show');
    Route::get('/{task}/edit', 'EditController')->name('tasks.edit');
    Route::patch('/{task}', 'UpdateController')->name('tasks.update');
    Route::delete('/{task}', 'DestroyController')->name('tasks.destroy');
});


Route::group(['namespace'=>'App\Http\Controllers\User', 'prefix'=>'users', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('users.index');
    Route::get('/create', 'CreateController')->name('users.create');
    Route::post('/', 'StoreController')->name('users.store');
    Route::get('/{user}', 'ShowController')->name('users.show');
    Route::get('/{user}/edit', 'EditController')->name('users.edit');
    Route::patch('/{user}', 'UpdateController')->name('users.update');
    Route::delete('/{user}', 'DestroyController')->name('users.destroy');
});

Route::group(['namespace'=>'App\Http\Controllers\Machine', 'prefix'=>'machines', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('machines.index');
    Route::get('/create', 'CreateController')->name('machines.create');
    Route::post('/', 'StoreController')->name('machines.store');
    Route::get('/{machine}', 'ShowController')->name('machines.show');
    Route::get('/{machine}/edit', 'EditController')->name('machines.edit');
    Route::patch('/{machine}', 'UpdateController')->name('machines.update');
    Route::delete('/{machine}', 'DestroyController')->name('machines.destroy');
});


Route::group(['namespace'=>'App\Http\Controllers\Company', 'prefix'=>'companies', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('companies.index');
    Route::get('/create', 'CreateController')->name('companies.create');
    Route::post('/', 'StoreController')->name('companies.store');
    Route::get('/{company}', 'ShowController')->name('companies.show');
    Route::get('/{company}/edit', 'EditController')->name('companies.edit');
    Route::patch('/{company}', 'UpdateController')->name('companies.update');
    Route::delete('/{company}', 'DestroyController')->name('companies.destroy');
});

Route::group(['namespace'=>'App\Http\Controllers\Project', 'prefix'=>'projects', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('projects.index');
    Route::get('/archieve','ArchieveController')->name('projects.archieve');
    Route::get('/create', 'CreateController')->name('projects.create');
    Route::post('/', 'StoreController')->name('projects.store');
    Route::get('/{project}', 'ShowController')->name('projects.show');
    Route::get('/{project}/executions', 'ExecuteController')->name('projects.execute');
    Route::get('/{project}/edit', 'EditController')->name('projects.edit');
    Route::patch('/{project}', 'UpdateController')->name('projects.update');
    Route::patch('/{project}/expense', 'UpdateExpenseController')->name('projects.update.expense');
    Route::delete('/{project}', 'DestroyController')->name('projects.destroy');
});

Route::group(['namespace'=>'App\Http\Controllers\Project\Work', 'prefix'=>'project/{project}/works', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('projects.works.index'); // должна открывать смету в целом
    Route::get('/create', 'CreateController')->name('projects.works.create'); // создает сметную позицию
    Route::post('/', 'StoreController')->name('projects.works.store'); // сохраняет сметную позицию
    Route::get('/{work}/edit', 'EditController')->name('projects.works.edit'); // редактирует конретную позицию в смете
    Route::patch('/{work}', 'UpdateController')->name('projects.works.update'); // обновляет позицию в смете
    Route::delete('/{work}', 'DestroyController')->name('projects.works.destroy'); // удаляет позицию в смете
});

// Отображение формы загрузки файла
Route::get('projects/{project}/documents', [DocController::class, 'showUploadForm'])->name('projects.documents.index');
Route::post('/projects/{project}/documents', [DocController::class, 'uploadFile'])->name('projects.documents.upload');
Route::get('/projects/{project}/documents/{filename}', [DocController::class, 'downloadFile'])->name('projects.documents.download');
Route::get('/delete-file/{filename}', [DocController::class, 'deleteFile'])->name('projects.documents.destroy');




Route::group(['namespace'=>'App\Http\Controllers\Task\Update', 'prefix'=>'tasks/{task}/updates', 'middleware'=>'auth'], function() {
    Route::get('/create', 'CreateController')->name('tasks.updates.create'); // создает сметную позицию
    Route::post('/', 'StoreController')->name('tasks.updates.store'); // сохраняет сметную позицию
    Route::get('/{update}/edit', 'EditController')->name('tasks.updates.edit');
    Route::patch('/{update}', 'UpdateController')->name('tasks.updates.update');
    Route::delete('/{update}', 'DestroyController')->name('tasks.updates.destroy');
});



Route::group(['namespace'=>'App\Http\Controllers\Task', 'prefix'=>'tasks', 'middleware'=>'auth'],function() {
    Route::get('/create/{project}','ProjectCreateController')->name('projects.tasks.create');
    Route::post('/store/{project}', 'ProjectStoreController')->name('projects.tasks.store');
});

//
Route::group(['namespace'=>'App\Http\Controllers\Marketing', 'prefix'=>'marketing', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('marketings.index');
//    Route::get('/banners', 'BannersController')->name('marketings.banners');
//    Route::get('/emails', 'IndexController')->name('marketings.emails');
//    Route::get('/tenders', 'TendersController')->name('marketings.tenders');
//    Route::get('/landing', 'LandingController')->name('marketings.landing');

});

Route::group(['namespace'=>'App\Http\Controllers\Marketing\Email', 'prefix'=>'marketing/emails', 'middleware'=>'auth'],function() {
    Route::get('/','IndexController')->name('marketings.emails.index');
    Route::get('/create', 'CreateController')->name('marketings.emails.create');
    Route::post('/', 'StoreController')->name('marketings.emails.store');
    Route::get('/{email}/edit', 'EditController')->name('marketings.emails.edit');
    Route::patch('/{email}', 'UpdateController')->name('marketings.emails.update');
    Route::delete('/{email}', 'DestroyController')->name('marketings.emails.destroy');
});


