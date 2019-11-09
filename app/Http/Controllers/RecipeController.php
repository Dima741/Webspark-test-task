<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Recipe $recipe)
    {
        if ($request->ajax()) {
            $recipes = $recipe->get();
            return datatables()->of($recipes)
                ->editColumn('action', function ($recipe) {
                    return '
                        <a
                            href="'. route('recipes.show', ['recipe' => $recipe->id]) .'"
                            class="edit btn btn-primary btn-sm"
                        >
                            <i class="fas fa-eye"></i>
                        </a>
                        <a
                            href="'. route('recipes.edit', ['recipe' => $recipe->id]) .'"
                            class="edit btn btn-primary btn-sm"
                        >
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="'. route('recipes.destroy', ['recipe' => $recipe->id]) .'" method="post">
                              ' . method_field('DELETE') . '
                             <input type="hidden" name="_token" value="' . csrf_token() . '">
                            <button class="delete btn btn-danger btn-sm" type="submit">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                        ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('recipes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Recipe $recipe)
    {

        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Recipe $recipe)
    {
        // post request

        $recipe->fill($request->all());
        $recipe->save();

        return redirect('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //отображение рецепта
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //edit form
        return view('recipes.edit', compact('recipe'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $recipe->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        //redirect
    }
}
