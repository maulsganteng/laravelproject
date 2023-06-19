<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dasboard extends Controller
{
   public function index(){
    return view('livewire.pages.home-component');
   }
   public function employe(){
    return view('livewire.pages.employe-component');
   }
   public function project(){
    return view('livewire.pages.project-component');
   }
   public function useerr(){
    return view('livewire.pages.user-component');
   }
   public function login(){
    return view('livewire.pages.login-component');
   }


}
