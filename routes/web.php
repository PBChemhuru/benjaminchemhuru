<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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
    return view('projects/index');});
//show all  projects
Route::get('/projects',[ProjectsController::class, 'projects']);
//search for project
Route::get('/projects/search/',[ProjectsController::class, 'search']);
//show one project
Route::get('/projects/{project}',[ProjectsController::class, 'show']);
//download resume
Route::get('/dresume',[ProjectsController::class, 'resume']);
//send email
Route::get('/contact',[MailController::class, 'contact']);

Route::post('/contact',[MailController::class, 'sendmail']);