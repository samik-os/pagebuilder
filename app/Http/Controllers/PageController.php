<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotlogics\Grapesjs\App\Traits\EditorTrait;

use App\Models\Page;

class PageController extends Controller
{
    use EditorTrait;
    //
    public function viewEditor(Request $request, Page $page)
    {
        return $this->show_gjs_editor($request, $page);
    }

    public function viewPage(Request $request, Page $page)
    {
        return view('page', compact('page'));
    }
}
