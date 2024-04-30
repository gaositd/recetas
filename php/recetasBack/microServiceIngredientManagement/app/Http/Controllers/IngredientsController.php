<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\Ingredient;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */

     public function index() {
        $ingredients = Ingredient::all();
        return response()->json($ingredients, 200);
     }
}
