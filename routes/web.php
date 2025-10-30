<?php

use App\Livewire\Usuarios\UsuarioCreate;
use Illuminate\Support\Facades\Route;

Route::get('/usuario/create', UsuarioCreate::class)->name('usuario.creatre');
