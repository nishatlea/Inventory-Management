<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function brands()
    {
        $brands = Brand::latest()->paginate(5);
        return view('brands', compact('brands'));
    }

    public function addBrand(Request $request)
    {
        //         // dd($request->brand_name);
        $request->validate(
            [
        'brand_name' => 'required|unique:brands,name',
            ],
            [
                'brand_name.required' => 'Brand Name is required',
                'brand_name.unique' => 'Brand already exists',
            ]
        );

        $brand = new Brand();
        $brand->name = $request->brand_name;

        $brand->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    //update Brand
    public function updateBrand(Request $request, $id)
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
        dump($request->up_id);
        dump($request->up_name);
        $brand = Brand::findOrFail($id);
        dump($id);
        $brand->name = $request->up_name; // Assuming the field name is 'up_name'
        $brand->save();

        return response()->json([
            'status' => 'success',
        ]);
    }




}
