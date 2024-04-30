<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Model\Ingredients;

  class StoreIngredients extends Conreoller{
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeIngredient(Request $request){
      $request->validate([
        'IngredientName' => $request->get('ingredientName'),
        'QuantityAvailable' => $request->get('QuantityAvailable'),
      ]);

      $ingredient = new Ingredient([
        'IngredientName' => $request->get('IngredientName'),
        'QuantityAvailable' => $request->get('QuantityAvailable'),        
      ]);

      $ingredient->save();
      return response()->json($ingredient, 201);
    }
  }