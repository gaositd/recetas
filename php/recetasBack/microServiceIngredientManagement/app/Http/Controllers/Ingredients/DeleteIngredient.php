<?php
  namespace App\Http\Request;

  use Illuminate\Http\Request;
  use App\Models\Model\Ingredient;

  class DeleteIngredient extends Controller{
    /**
    * Display a listing of the resource.
    * @return \Illuminate\Http\Response
    */
    public function destroy(Ingrediente $ingredient){
      if($ingredient == null){
        return response->json(
          ['error' => "Ingrediente no encontrado"],
          404
        );
      }

      $ingredient->delete();
      return response->json($ingredient, 200);
    }
  }