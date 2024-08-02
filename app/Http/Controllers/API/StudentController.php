<?php

namespace App\Http\Controllers\API;
use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // adding all the students informatiuon in to the funtion named "index ()"
    public function index()
    {
        return Students::all();
    }

    // Validate the nesery informatrion based on the given ID of the dataset (Display the data acording to the ID given within the url)
    public function show($id)
    {
        return Students::findOrFail($id);

    }

    public function store(Request $request)
    {
        $product = Students::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Students::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        Students::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

}

