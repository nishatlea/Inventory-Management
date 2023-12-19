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
    public function updateBrand(Request $request)
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

        Brand::where('id', $request->up_id)->update(['name' => $request -> up_name]);
        return response()->json([
            'status' => 'success',
        ]);
    }




}
