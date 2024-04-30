<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Model\Ingredients;

  class UpdateIngedient extends Controller{
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function findIngredientById($id){
      try {
          return Ingredient::findOrFail($id);
      } catch (ModelNotFoundException $mnfe) {
          return null;
      }
    }

    public function updateIngredient(Request $request, $id){
      request->validate([
        'IngredienteName' => 'required|string|max:255',
        'QuantityAvailable' => 'required|numeric',
      ]);

      $ingredient = $this->findIngredientById($id);
      if($ingredient == null){
        return response()->json(
          ['error' => "{$request->input('IngredientName')} no encontrado"],
          404
        );
      }

      $ingredient->IngredientName = $request->input('IngredientName');
      $ingredient->QuantityAvalilable = $request->input('QueantityAvalable');

      $ingredient->save();
      return response->json($ingredient, 200);
    }
  
  }