<?php

namespace App\Http\Controllers;

use App\Http\Requests\Attribute\UpdateRequest;
use App\Models\Attribute;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::all();
        return view('attributes.index', compact('attributes'));
    }

    public function edit(Attribute $attribute)
    {
        return view('attributes.edit', compact('attribute'));
    }

    public function update(UpdateRequest $request, Attribute $attribute)
    {
        DB::beginTransaction();
        try {
            $attribute->update($request->validated());
        } catch (\Throwable $e) {
            DB::rollBack();

            return redirect()
                ->route('attributes.edit', $attribute)
                ->with('status', 'Wystąpił błąd podczas aktualizacji atrybutów.' . $e->getMessage());
        }
        DB::commit();

        return redirect()
            ->route('attributes.edit', $attribute)
            ->with('status', 'Atrybuty zostały pomyślnie zaktualizowane.');
    }
}
