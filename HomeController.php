<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblContent;

class HomeController extends Controller
{
    public function getContent(Request $request) {
		//$view = View::make('Navi');
		$content = TblContent::where('id_page', $request->id)->first();
		
		if (!$content) {
			return abort(404);
		}
		
		return view('Navi', ['content' => $content]);
	}
}
