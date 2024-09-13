<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\Requests\NoteStoreRequest;
use Illuminate\Http\Request\NoteUpdateRequest;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $notes = Note::latest()->paginate(5);
        return view('notes.index', compact('notes'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View{
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|string",
            "position"=> "required|string",
            "office"=> "required|string",
            "age"=> "required|string",
            "startDate"=> "required|string",
            "salary"=> "required|string"



        ]);
        
        Category::validate($request->all());

        return redirect('/category')->route("")->with("success","Added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("category.show");

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("category.edit",compact("category"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route("category.index")->with("success","Updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with("success", "Deleted successfully");
    }
}
