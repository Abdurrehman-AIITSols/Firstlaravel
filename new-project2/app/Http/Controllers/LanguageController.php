<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change(Request $request)
    {
        $lang = $request->lang;
        $supportedLanguages = ['en', 'fr', 'es'];
        if (in_array($lang, $supportedLanguages)) {
            Session::put('locale', $lang);
        } else {
            Session::put('locale', 'en');
        }
        return redirect()->back();
    }
}
