<?php

use App\Http\Livewire\Pages\Employe\CreateComponent;
use App\Http\Livewire\Pages\Employe\UpdateComponent;
use App\Http\Livewire\Pages\EmployeComponent;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\ProjectComponent;
use App\Http\Livewire\Pages\UserComponent;
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

Route::get("/", HomeComponent::class)->name("dasboard");
Route::get("/project", ProjectComponent::class)->name("project");
Route::get("/user", UserComponent::class)->name("user");

Route::get("/employe", EmployeComponent::class)->name("employe");
Route::get("/employe/create", CreateComponent::class)->name("employe.create");
Route::get("/employe/{emloyeid}", UpdateComponent::class)->name("employe.update");
