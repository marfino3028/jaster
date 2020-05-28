<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editorder(Request $request, $id)
    {
        return $request->all();
    }
}
