<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quotes::all();
        return response()->json($quotes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quotes = new Quotes;
        $quotes->character = $request->character;
        $quotes->desc = $request->desc;
        $quotes->save();
        return response()->json([
            "message" => "Input added succesfully."
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $res = "";
        $quotes = Quotes::find($id);
        if(!empty($quotes)){
            $res = response->json($quotes);
        }else{
            $res = response()->json([
                "message" => "Register not found."
            ]);
        }
        return $res;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $quotes = Quotes::find($id);
        $quotes->character = $request->character;
        $quotes->desc = $request->desc;
        $quotes->save();
        return response()->json([
            "message" => "Register updated succesfully."
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $quotes = Quotes::find($id);
        $quotes->delete();
        return response()->json([
            "message" => "Register deleted succesfully."
        ]);
    }
}
