<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Model\Ingredient;

  class FindIngredientById extends Controller{

    public function findIngredientById(Request $ingredient){
      try {
        return Ingredient::fidOrFail($ingredient->id);
      } catch (ModelNotFoundException $mnfe) {
        return response->json(
          ["error" => "Ingrediente no encontrado"],
          404
        );
      }
    }
  }