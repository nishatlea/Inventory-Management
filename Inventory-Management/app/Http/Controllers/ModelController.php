<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function models()
    {
        $brands = Modelq::latest()->paginate(5);
        return view('models', compact('models'));
    }

    public function addModel(Request $request)
    {
        //         // dd($request->brand_name);
        $request->validate(
            [
        'model_name' => 'required|unique:models,name',
            ],
            [
                'model_name.required' => 'Brand Name is required',
                'model_name.unique' => 'Brand already exists',
            ]
        );

        $model = new Modelq();
        $model->name = $request->model_name;

        $model->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    //update Brand
    public function updateModel(Request $request, $id)
    {
        // dd($request->brand_name);
        // $request->validate(
        //     [
        // 'up_name' => 'required|unique:brands,name' . $request->up_id,
        //     ],
        //     [
        //         'up_name.required' => 'Brand Name is required',
        //         'up_name.unique' => 'Brand already exists',
        //     ]
        // );
        // dump($id);
        $model = Modelq::findOrFail($id);
        $model->name = $request->up_name; // Assuming the field name is 'up_name'
        $model->save();

        // return response()->json([
        //     'status' => 'success',
        // ]);

        return redirect('/model')->with('success', 'Model updated successfully.');
    }

    public function deleteModel(Request $request)
    {
        ModelBrand::findOrFail($request->model_id)->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }
}
