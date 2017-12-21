<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteCadastroController extends Controller
{
	public function create() {
		return view('site.cadastro');
	}
}
