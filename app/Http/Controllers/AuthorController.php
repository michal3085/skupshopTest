<?php

namespace App\Http\Controllers;

use App\Http\Requests\Author\UpdateRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Author $author)
    {
        DB::beginTransaction();
        try {
            $author->fill($request->validated());
            $author->save();
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Wystąpił błąd podczas aktualizacji autora');
        }
        DB::commit();

        return redirect()->back()->with('success', 'Autor został zaktualizowany');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
    }
}
