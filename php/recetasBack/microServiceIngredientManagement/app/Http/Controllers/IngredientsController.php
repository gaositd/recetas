<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\Ingredient;

class IngredientsController extends Controller
{
    // private function findIngredientById($id){
    //     try {
    //         return Ingredient::findOrFail($id);
    //     } catch (ModelNotFoundException $mnfe) {
    //         return null;
    //     }
    // }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */

     public function index() {
        $ingredients = Ingredient::all();
        return response()->json($ingredients, 200);
     }

    //  public function show(Ingredient $ingredient){
    //     return response()->json($ingredient, 200);
    //  }

     /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //  public function storeIngredient(Request $request){
    //     $request->validate([
    //         'IngredientName' => 'required|string|max:255',
    //         'QuantityAvailable' => 'required|numeric',
    //     ]);

    //     $ingredient = new Ingredient([
    //         'IngredientName' => $request->get('IngredientName'),
//         'QuantityAvailable' => $request->get('QuantityAvailable'),
    //     ]);

    //     $ingredient->save();
    //     return response()->json($ingredient, 201);
    //  }

    //  public function updateIngedient(Request $request, $id){
    //     $request->validate([
    //         'IngredientName' => 'required|string|max:255',
    //         'QuantityAvailable' => 'required|numeric',
    //     ]);

    //     $ingredient = $this->findIngredientById($id);
    //     if($ingredient == null){
    //         return response()->json(
    //             ['error' => "{$request->input('IngredientName')} no encontrado"], 404);
    //     }

    //     $ingredient->IngredientName = $request->input('IngredientName');
    //     $ingredient->QuantityAvailable = $request->input('QuantityAvailable');

    //     $ingredient->save();
    //     return response()->json($ingredient, 200);
    //  }

     /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Ingredient $id)
    // {
    //     $ingredient = $id;
    //     if($ingredient == null){
    //         return response->json(
    //             ['error' => "Ingrediente no encontrado"], 404);
    //     }
    //     $ingredient->delete();
    //     return response()->json($id, 200);
    // }
}
