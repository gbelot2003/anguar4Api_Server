<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return Response::json($images, 200);
    }

    public function store(Request $request)
    {}

    public function edit($id)
    {    }

    public function update(Request $request, $id)
    {}

    public function delete($id)
    {}
}
