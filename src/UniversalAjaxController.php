<?php

namespace Inimedia\Foundation;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class UniversalAjaxController extends BaseController
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index(Request $request)
    {
        $controller = app()->make("\\App\\Http\\Controllers\\".explode('@', $request->input('ajax_target'))[0]);
        $method = explode('@', $request->input('ajax_target'))[1];
        return app()->call([$controller, $method], [
            $request->data
        ]);
    }
}
