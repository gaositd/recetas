<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Moldes\Model\Ingredients;

  class ShowIngredients extends Controller{
    /**
    * Display a listing of the resource.
    * @return \Illuminate\Http\Response
    */
    public function show(Ingredient $ingredient){
      return response()->json($ingredient, 200);
   }
  }